<?php
class CProfesores{
    public $objMprofesores;
    public $vista;

    function __construct(){
        require_once __DIR__ . '/../Modelo/mProfesores.php';
        $this->objMprofesores = new MProfesores();
    }

    public function gestionarBorrado() {

        $idProfesor = isset($_GET["id"]) ? $_GET["id"] : "";
            
        $this->objMprofesores->borrar($idProfesor);
        
        $this->vista = 'listarProfesores.php';
        
    }

    public function modificar(){

        $idProfesor = isset($_GET["id"]) ? $_GET["id"] : "";

        $nombre = $this->objMprofesores->nombre($idProfesor);

        $this->vista = 'confirmarModificar.php';

        return $nombre;
    }

    public function listarProfesores()
    {
        $this->vista = 'profesores.php';
        $profesores =  $this->objMprofesores->listarProfesores();
        return ['profesores' => $profesores];
    }

    public function confirmarModificacion()
    {
        $idProfesor= $_POST['idOriginal']; 

        $nombreModificado = $_POST['nuevoNombre'];

        $this->objMprofesores->modificar($idProfesor,$nombreModificado);

        $this->vista = 'listarProfesores.php';

    }

}