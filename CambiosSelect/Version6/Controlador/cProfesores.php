<?php
class CProfesores{
    private $objMprofesores;
    public $vista;

    function __construct(){
        require_once __DIR__ . '/../Modelo/mProfesores.php';
        $this->objMprofesores = new MProfesores();
    }

    public function gestionarBorrado() {

        $idProfesor = isset($_GET["id"]) ? $_GET["id"] : "";

        $nombre = $this->objMprofesores->nombre($idProfesor);

        $this->vista = 'profesores.php';
        
    }

    public function modificar(){

        $idProfesor = isset($_GET["id"]) ? $_GET["id"] : "";

        $nuevoNombre = isset($_POST["nuevoNombre"]) ? $_POST["nuevoNombre"] : "";

        if($nuevoNombre ==""){

            $nombre = $this->objMprofesores->nombre($idProfesor);

                $this->vista = 'confirmarModificar.php';
        
                 return ['nombre' => $nombre];

        }else{
            if($nuevoNombre != ""){
                $this->objMprofesores->modificar($idProfesor,$nuevoNombre);
                echo '<h2><a href="Vista/profesores.php">Modificado correctamente, vuelve atrás</a></h2>';
            }else{
                echo '<h2><a href="Vista/profesores.php">Usuario no modificado vuelve atras</a></h2>';
            }
        }
    }
}