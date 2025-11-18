<?php
	
	require_once '../modelo/consultas.php';

	/*Seleccionar datos*/
	$bd = new Consultas();
	$resultado = $bd->datosSelect();

    include '../vista/index.php';
?>
