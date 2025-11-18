<?php
	
	require_once 'consultas.php';
	
	/*Seleccionar datos*/
	$bd = new Consultas();
	$resultado = $bd->datosSelect();

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Título de mi página web</title>
	  <link rel="stylesheet" href="style.css">
   </head>
   <body>
        <h3>Profesor</h3>
            <?php
                while($fila = $resultado->fetch_assoc()){
                    echo '<div class="profesor">';
                    echo '<p>'.$fila["nombre"].'</p>';
                    echo '<a href="borrar.php?id='.$fila["idProfesor"].'">Borrar</a>';
                    echo '<a href="modificar.php?id='.$fila["idProfesor"].'">Modificar</a>';
                    echo '</div>';
                }
            ?>
        </br></br>
   </body>
</html>