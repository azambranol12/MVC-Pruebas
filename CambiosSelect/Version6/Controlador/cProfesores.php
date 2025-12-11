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

        $confirmacion = isset($_POST["confirm"]) ? $_POST["confirm"] : "";

        if ($confirmacion === "") {
            
            $nombre = $this->objMprofesores->nombre($idProfesor);
            
            require_once __DIR__ . '/../Vista/confirmarBorrar.php';

        } else {
            
            if ($confirmacion == '1') {
                $this->objMprofesores->borrar($idProfesor);
                echo "<h1>Borrado correctamente. <a href='Vista/profesores.php'>Volver</a></h1>";
            } else {
                echo "<h1>Operación cancelada. <a href='Vista/profesores.php'>Volver</a></h1>";
            }
        }
    }

    public function modificar(){

        $idProfesor = isset($_GET["id"]) ? $_GET["id"] : "";

        $nuevoNombre = isset($_POST["nuevoNombre"]) ? $_POST["nuevoNombre"] : "";

        if($nuevoNombre ==""){

            $nombre = $this->objMprofesores->nombre($idProfesor);

            require_once __DIR__ . '/../Vista/confirmarModificar.php';

        }else{
            if($nuevoNombre != ""){
                $this->objMprofesores->modificar($idProfesor,$nuevoNombre);
                echo '<h2><a href="Vista/profesores.php">Modificado correctamente, vuelve atrás</a></h2>';
            }else{
                echo '<h2><a href="Vista/profesores.php">Usuario no modificado vuelve atras</a></h2>';
            }
        }
    }

    public function listarProfesores()
    {
        $this->vista = 'profesores.php';
        $profesores =  $this->objMprofesores->listarProfesores();
        return ['profesores' => $profesores];
    }

    public function borrar()
    {
        
    }

}