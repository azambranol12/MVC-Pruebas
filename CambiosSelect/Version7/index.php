<?php

require_once 'Config/config.php';

if(!isset($_GET['c'])){
    $_GET['c'] == DEF_CONTROLADOR;
}

if(!isset($_GET['m'])){
    $_GET['m'] = DEF_METODO;
}

$rutaControlador = RUTA_CONTROLADOR . $_GET['c']. '.php';

require $rutaControlador;

$controlador = 'C' .$_GET['c'];

$objControlador = new $controlador();

$datos = [];

if(method_exists($objControlador,$_GET['m'] )){
    $datos = $objControlador->{$_GET['m']}();
    extract($datos);
}

require_once RUTA_VISTA . $objControlador->vista . '.php';



?>