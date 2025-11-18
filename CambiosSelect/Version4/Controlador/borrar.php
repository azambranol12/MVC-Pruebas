<?php

require_once '../modelo/consultas.php';

$idProfesor = $_GET["id"];
$bd = new Consultas();
$resultado = $bd->nombre($idProfesor);
$fila = $resultado->fetch_assoc();

$confirmacion = isset($_POST["confirm"]) ? $_POST["confirm"] :"" ;

if($confirmacion ==""){
    echo '¿Estás seguro de borrar al este profesor con nombre '.$fila["nombre"] .'?';
?>
    <form method="post">
        <button type="submit" name="confirm" value="1">Sí</button>
        <button type="submit" name="confirm" value="0">No</button>
    </form>
<?php

}else{

    if($confirmacion != ""){
        if($confirmacion=='1'){
            $bd->borrar($idProfesor);
            echo '<h2><a href="../Controlador/listarprofesores.php">Borrado correctamente, vuelve atras</a></h2>';
        }else{
            echo '<h2><a href="../Controlador/listarprofesores.php">Usuario no borrado vuelve atras</a></h2>';
        }
    }
}
?>