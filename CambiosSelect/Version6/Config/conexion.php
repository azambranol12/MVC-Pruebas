<?php
require_once 'configdb.php';

class Conexion{
    
    protected $conexion;
    
    public function __construct(){

        try {
            $this->conexion = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, PASSWORD);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
    
    public function cerrarConexion(){
        $this->conexion = null;
    }
}
?>
