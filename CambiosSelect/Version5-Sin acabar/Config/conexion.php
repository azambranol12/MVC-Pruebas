<?php
	require_once 'configdb.php';
	
	class Conexion{
		
		protected $conexion;
		
		public function __construct(){

			$this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
		}

		public function getConexion() {
        	return $this->conexion;
    	}
		
		public function cerrarConexion(){
			if($this->conexion)
			{
				$this->conexion->close();
			}
		}
	}
?>