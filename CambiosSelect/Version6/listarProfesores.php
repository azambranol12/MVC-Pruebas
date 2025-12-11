<?php

require_once __DIR__ . '/Controlador/cProfesores.php';

$objCusuario = new CProfesores();

$profesores = $objCusuario->listarProfesores();

extract($profesores);

require_once __DIR__ .'/Vista/'.$objCusuario->vista;

?>