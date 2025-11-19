<?php

require_once '../modelo/consultas.php';

$idProfesor = $_GET["id"];
$bd = new Consultas();
$resultado = $bd->nombre($idProfesor);
$fila = $resultado->fetch_assoc();

$nuevoNombre = isset($_POST["nuevoNombre"]) ? $_POST["nuevoNombre"] :"" ;

if($nuevoNombre ==""){
    echo '¿Cual es el nuevo nombre que le quieres poner al profesor con nombre '.$fila["nombre"].'?';
?>
    <form method="post">
        <input type="text" name="nuevoNombre">
        <button type="submit">Modifica</button>
    </form>
<?php

}else{
    if($nuevoNombre != ""){
        $bd->modificar($idProfesor,$nuevoNombre);
        echo '<h2><a href="../Controlador/listarprofesores.php">Modificado correctamente, vuelve atrás</a></h2>';
    }else{
        echo '<h2><a href="../Controlador/listarprofesores.php">Usuario no modificado vuelve atras</a></h2>';
    }
}

?>