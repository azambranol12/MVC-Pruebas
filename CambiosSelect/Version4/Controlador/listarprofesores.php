<?php
	
	require_once '../modelo/consultas.php';

	/*Seleccionar datos*/
	$bd = new Consultas();
	$resultado = $bd->datosSelect();

	while($fila = $resultado->fetch_assoc()){
        echo '<div class="profesor">';
        echo '<p>'.$fila["nombre"].'</p>';
        echo '<a href="../Controlador/procesar.php?id='.$fila["idProfesor"].'&valor=1">Borrar</a>';
        echo '<a href="../Controlador/procesar.php?id='.$fila["idProfesor"].'&valor=2">Modificar</a>';
        echo '</div>';
    }

?>
