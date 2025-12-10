<!DOCTYPE html>
<html>
    <head>
      <title>Título de mi página web</title>
        <link rel="stylesheet" href="style.css">
      <meta charset="UTF-8">
    </head>
    <body>
    <?php echo '¿Cual es el nuevo nombre que le quieres poner al profesor con nombre '.$nombre.'?'; ?>
        <form method="post" action="">
            <input type="text" name="nuevoNombre">
            <button type="submit">Modifica</button>
        </form>
    </body>
</html>