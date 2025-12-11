<?php

require_once __DIR__ . '/Controlador/cProfesores.php';

$objCusuario = new CProfesores();

$datos = $objCusuario->gestionarBorrado();

extract($datos);

require_once 'Vista/'. $objCusuario->vista;

?>