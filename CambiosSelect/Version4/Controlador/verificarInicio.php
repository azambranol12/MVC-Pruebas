<?php

require_once '../modelo/consultas.php';

$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] :"" ;
$contrasenia = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] :"" ;

if($usuario != "" && $contrasenia != "") {

    $bd = new Consultas();
    $resultado = $bd->inicioSesion($usuario, $contrasenia);

    // Obtenemos la fila
    $fila = $resultado->fetch_assoc();

    if($fila) {
        // Login correcto → redirige
        header('Location:../Vista/profesores.php');
        exit;
    } else {
        echo '<h2><a href="../Vista/iniciosesion.html">Vuelve atrás, usuario o contraseña incorrectos</a></h2>';
    }

    } else {
        echo '<h2><a ../Vista/iniciosesion.html>Vuelve atrás, rellena ambos campos</a></h2>';
    }


?>