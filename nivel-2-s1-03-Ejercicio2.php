<?php

$alumnos = [
    'Pedro' => ['Matematicas' => 8, 'Ciencias' => 9, 'Lenguaje' => 6],
    'Ana' => ['Matematicas' => 10, 'Ciencias' => 6, 'Lenguaje' => 7],
    'Juan' => ['Matematicas' =>7, 'Ciencias' => 9, 'Lenguaje' => 8],
    'Mario' => ['Matematicas' => 6, 'Ciencias' => 9, 'Lenguaje' => 5],
];

function calcularMedias($alumnos) {
    $sumaTotal = 0;
    $cantidadNotas = 0;

    foreach ($alumnos as $nombre => $notas) {
        $sumaAlumno = array_sum($notas);
        $mediaAlumno = $sumaAlumno / count($notas);

        echo "Alumno: $nombre" . PHP_EOL;
        echo "Notas: " . implode(', ', $notas) . PHP_EOL;
        echo "Media: " . number_format($mediaAlumno, 1) . PHP_EOL;

        $sumaTotal += $sumaAlumno;
        $cantidadNotas += count($notas);
    }

    $mediaClase = $sumaTotal / $cantidadNotas;
    echo "Meda de la clase " . number_format($mediaClase, 2) . PHP_EOL;
}

calcularMedias($alumnos)

?>
