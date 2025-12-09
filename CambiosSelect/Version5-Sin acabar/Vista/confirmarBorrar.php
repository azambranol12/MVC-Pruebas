<!DOCTYPE html>
<html>
    <head>
      <title>Título de mi página web</title>
        <link rel="stylesheet" href="style.css">
      <meta charset="UTF-8">
    </head>
    <body>
    <form method="post" action="">
        <?php echo '¿Estás seguro de borrar al este profesor con nombre '.$nombre .'?'; ?>
        <button type="submit" name="confirm" value="1">Sí</button>
        <button type="submit" name="confirm" value="0">No</button>
    </form>

    </body>
</html>