<?php
	
	require_once '../Modelo/mProfesores.php';

	/*Seleccionar datos*/
	$bd = new MProfesores();
	$resultado = $bd->datosSelect();

	while($fila = $resultado->fetch_assoc()){
        echo '<div class="profesor">';
        echo '<p>'.$fila["nombre"].'</p>';
       echo '<a href="../borrar.php?id=' . $fila["idProfesor"] . '">Borrar</a>';
        echo '<a href="../modificar.php?id='.$fila["idProfesor"].'">Modificar</a>';
        echo '</div>';
    }

?>
