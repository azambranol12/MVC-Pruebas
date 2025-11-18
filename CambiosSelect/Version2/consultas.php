<?php

	require_once 'conexion.php';
	
	class Consultas extends Conexion
	{
		
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function datosSelect(){
			
			echo $sql = "SELECT * FROM profesores;";
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
	}
?>
