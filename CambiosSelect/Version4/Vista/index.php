<!DOCTYPE html>
<html>
   <head>
      <title>Título de mi página web</title>
	  <link rel="stylesheet" href="../vista/style.css">
   </head>
   <body>
        <h3>Profesor</h3>
            <?php
                while($fila = $resultado->fetch_assoc()){
                    echo '<div class="profesor">';
                    echo '<p>'.$fila["nombre"].'</p>';
                    echo '<a href="procesar.php?id='.$fila["idProfesor"].'&valor=1">Borrar</a>';
                    echo '<a href="procesar.php?id='.$fila["idProfesor"].'&valor=2">Modificar</a>';
                    echo '</div>';
                }
            ?>
        </br></br>
   </body>
</html>