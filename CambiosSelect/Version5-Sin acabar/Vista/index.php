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
                echo '<p>'.$fila["nombreProfe"].'</p>';
                echo '<p>La clase de este profesor es: '.$fila["clase"].'</p>';
                echo '<p>Sus observaciones: '.$fila["observaciones"].'</p>';
                echo '<p>----- Sus alumnos ------</p>';
                
                // Mostrar todos los alumnos de este profesor
                foreach($fila['alumnos'] as $alumno){
                    echo '<p>'.$alumno.'</p>';
                }

                echo '<a href="procesar.php?id='.$fila["idProfesor"].'&valor=1">Borrar</a>';
                echo '<a href="procesar.php?id='.$fila["idProfesor"].'&valor=2">Modificar</a>';
                echo '</div>';
            }
            ?>
        </br></br>
   </body>
</html>