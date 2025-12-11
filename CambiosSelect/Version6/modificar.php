<?php

require_once __DIR__ . '/Controlador/cProfesores.php';

$objCusuario = new CProfesores();

$nombre = $objCusuario->modificar();

require_once __DIR__ .'/Vista/'.$objCusuario->vista;
?>