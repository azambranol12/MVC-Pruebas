<?php

require_once 'consultas.php';

$idProfesor = $_GET["id"];
$bd = new Consultas();
$resultado = $bd->nombre($idProfesor);
$fila = $resultado->fetch_assoc();

    echo '¿Cual es el nuevo nombre que le quieres poner al profesor con nombre '.$fila["nombre"].'?';
?>
    <form method="post">
        <input type="text" name="nuevoNombre">
        <button type="submit">Modifica</button>
    </form>
<?php

    $nuevoNombre = isset($_POST["nuevoNombre"]) ? $_POST["nuevoNombre"] :"" ;

    if($nuevoNombre != ""){
        $bd->modificar($idProfesor,$nuevoNombre);
        echo '<h2><a href="index.php">Vuelve atras</a></h2>';
    }else{
        echo '<h2><a href="index.php">Usuario no modificado vuelve atras</a></h2>';
    }


?>