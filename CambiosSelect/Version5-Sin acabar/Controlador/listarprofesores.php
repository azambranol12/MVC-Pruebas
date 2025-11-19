<?php
require_once '../modelo/consultas.php';

/* Seleccionar datos */
$bd = new Consultas();
$resultado = $bd->datosSelect();

// Agrupar alumnos por profesor en el controlador
$profesores = [];
while($fila = $resultado->fetch_assoc()) {
    $id = $fila['idProfesor'];

    if(!isset($profesores[$id])) {
        // Crear nuevo profesor
        $profesores[$id] = [
            'idProfesor' => $fila['idProfesor'],
            'nombreProfe' => $fila['nombreProfe'],
            'clase' => $fila['clase'],
            'observaciones' => $fila['observaciones'],
            'alumnos' => []
        ];
    }

    // Agregar alumno al profesor correspondiente
    $profesores[$id]['alumnos'][] = $fila['nombreAlumno'];
}

// Convertimos el array a un objeto mysqli-like para usar while en la vista
class ResultadoFake {
    private $data;
    private $index = 0;

    public function __construct($array) {
        $this->data = array_values($array); // reset keys
    }

    public function fetch_assoc() {
        if(isset($this->data[$this->index])) {
            return $this->data[$this->index++];
        } else {
            return false;
        }
    }
}

$resultado = new ResultadoFake($profesores);

include '../vista/index.php';
?>
