<?php

$numerosEnteros = [10, 25, 3, 48, 17];

//  Pitamos en pantalla y recorremos el array con un bucle foreach
echo "Mostrando los números uno a uno: " . PHP_EOL;

foreach ($numerosEnteros as $numero) {
    // En cada vuelta del bucle, la variable $numero toma el valor de un elemento del array.
    echo $numero . PHP_EOL;
}

?>