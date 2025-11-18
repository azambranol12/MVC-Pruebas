<?php

require_once 'consultas.php';

$idProfesor = $_GET["id"];
$bd = new Consultas();
$resultado = $bd->nombre($idProfesor);
$fila = $resultado->fetch_assoc();

    echo '¿Estás seguro de borrar al este profesor con nombre '.$fila["nombre"] .'?';
?>
    <form method="post">
        <button type="submit" name="confirm" value="1">Sí</button>
        <button type="submit" name="confirm" value="0">No</button>
    </form>
<?php

    $confirmacion = isset($_POST["confirm"]) ? $_POST["confirm"] :"" ;

    if($confirmacion != ""){
        if($confirmacion=='1'){
            $bd->borrar($idProfesor);
            echo '<h2><a href="index.php">Vuelve atras</a></h2>';
        }else{
            header('Location: index.php');
        }
    }

?>