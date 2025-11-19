<?php

	require_once 'conexion.php';
	
	class Consultas extends Conexion
	{
		
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function datosSelect(){
			
			echo $sql = "SELECT profesores.nombre as nombreProfe, clase, observaciones, inscripciones_alumnos.nombre as nombreAlumno,
			profesores.idProfesor FROM profesores INNER JOIN inscripciones ON profesores.idProfesor = inscripciones.idTutor INNER JOIN 
			inscripciones_alumnos ON inscripciones_alumnos.idInscripcion = inscripciones.idInscripcion
			ORDER BY profesores.idProfesor;";
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
			return  $resultado = $this->conexion->query($sql);
		}

		public function inicioSesion($usuario, $contrasenia)
		{
			$sql = "SELECT nombre,contrasenia FROM usuarios WHERE nombre = '$usuario' AND contrasenia = '$contrasenia'";
			return  $resultado = $this->conexion->query($sql);
		}
	}
?>
