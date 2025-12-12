<?php

require_once 'Config/config.php';

if(!isset($_GET['c'])){
    $_GET['c'] = DEF_CONTROLADOR;
}

if(!isset($_GET['m'])){
    $_GET['m'] = DEF_METODO;
}

$rutaControlador = RUTA_CONTROLADOR . $_GET['c']. '.php';

require $rutaControlador;

$controlador = 'C' .$_GET['c'];

$objControlador = new $controlador();

$datos = [];

if (method_exists($objControlador, $_GET['m'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $datos = $objControlador->{$_GET['m']}($_POST);
    } 
    else {
        $datos = $objControlador->{$_GET['m']}();
    }

}

if ($objControlador->vista != '') {
    if (is_array($datos))
        extract($datos);
    require_once RUTA_VISTA . $objControlador->vista . '.php';
}
?>