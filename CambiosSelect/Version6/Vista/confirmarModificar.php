<!DOCTYPE html>
<html>
    <head>
      <title>Título de mi página web</title>
        <link rel="stylesheet" href="style.css">
      <meta charset="UTF-8">
    </head>
    <body>
    <?php echo '¿Cual es el nuevo nombre que le quieres poner al profesor con nombre '.$nombre.'?'; ?>
        <form method="post" action="./confirmarModificacion.php">
            <input type="hidden" name="idOriginal" value="<?php echo $_GET["id"] ?>">
    
            <label for="nuevoNombre">Nuevo Nombre:</label>
            <input type="text" name="nuevoNombre" id="nuevoNombre" value="<?php echo $_GET["id"] ?>">
            <button type="submit">Modifica</button>
        </form>
    </body>
</html>