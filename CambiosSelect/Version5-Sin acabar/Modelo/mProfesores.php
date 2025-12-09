<?php

	require_once __DIR__ . '/../Config/conexion.php';
	
	class MProfesores extends Conexion
	{
		
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function datosSelect(){
			
			 $sql = "SELECT * FROM profesores;";
			return  $resultado = $this->conexion->query($sql);
		}

        public function borrar($idProfesor)
        {
            $sql = 'DELETE FROM profesores WHERE idProfesor='.$idProfesor.';';
            $this->conexion->query($sql);
        }

		public function modificar($idProfesor, $nuevoNombre)
        {
            $sql = "UPDATE profesores SET nombre = '$nuevoNombre' WHERE idProfesor = $idProfesor;";
            $this->conexion->query($sql);
        }

		public function nombre($idProfesor)
		{
			$sql = "SELECT nombre FROM profesores WHERE idProfesor = $idProfesor;";
			$resultado = $this->conexion->query($sql);
			if ($resultado && $resultado->num_rows > 0) {

				$fila = $resultado->fetch_assoc(); 

				return $fila['nombre'];
			}
		}

		public function inicioSesion($usuario, $contrasenia)
		{
			$sql = "SELECT nombre,contrasenia FROM usuarios WHERE nombre = '$usuario' AND contrasenia = '$contrasenia'";
			return  $resultado = $this->conexion->query($sql);
		}
	}
?>
