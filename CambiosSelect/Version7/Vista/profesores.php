<!DOCTYPE html>
<html>
<head>
    <title>Título de mi página web</title>
    <link rel="stylesheet" href="Vista/style.css">
</head>
<body>
    <h3>Profesor</h3>
    <?php
        foreach($profesores as $profesor){
            echo '<div class="profesor">';
            echo '<p>' . $profesor["nombre"] . '</p>';
            echo '<a href="index.php?c=Profesores&m=gestionarborrado&id=' . $profesor["idProfesor"] . '">Borrar</a> ';
            echo '<a href="index.php?c=Profesores&m=modificar&id=' . $profesor["idProfesor"] . '">Modificar</a>';
            echo '</div>';
        }
    ?>
    <br><br>
</body>
</html>
