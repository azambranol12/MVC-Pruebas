<?php

require_once __DIR__ . '/../Config/conexion.php';

class MProfesores extends Conexion
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarProfesores()
    {
        $sql = "SELECT idProfesor, nombre FROM profesores;";
        $stmt = $this->conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function borrar($idProfesor)
    {
        $sql = "DELETE FROM profesores WHERE idProfesor = :idProfesor;";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':idProfesor', $idProfesor, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function modificar($idProfesor, $nuevoNombre)
    {
        $sql = "UPDATE profesores SET nombre = :nuevoNombre WHERE idProfesor = :idProfesor;";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':nuevoNombre', $nuevoNombre, PDO::PARAM_STR);
        $stmt->bindParam(':idProfesor', $idProfesor, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function nombre($idProfesor)
    {
        $sql = "SELECT nombre FROM profesores WHERE idProfesor = :idProfesor;";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':idProfesor', $idProfesor, PDO::PARAM_INT);
        $stmt->execute();
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            return $fila['nombre'];
        }
    }

    public function inicioSesion($usuario, $contrasenia)
    {
        $sql = "SELECT nombre, contrasenia FROM usuarios WHERE nombre = :usuario AND contrasenia = :contrasenia;";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':contrasenia', $contrasenia, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
