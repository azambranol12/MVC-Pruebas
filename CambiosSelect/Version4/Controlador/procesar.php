<?php

$valor = $_GET["valor"];
$idProfesor = $_GET["id"];

if($valor == '1'){
    header('Location: borrar.php?id=' . $idProfesor);
    exit;
}else{
    header('Location: modificar.php?id=' . $idProfesor);
    exit;
}
?>