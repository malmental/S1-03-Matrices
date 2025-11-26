<?php

$numerosEnteros = [10, 25, 3, 48, 17];

//  Recorremos el arra con un bucle foreach
//  'foreach' es la forma más fácil y segura de recorrer todos los elementos de un array.
echo "Mostrando los números uno a uno:\n";
foreach ($numerosEnteros as $numero) {
    // En cada vuelta del bucle, la variable $numero toma el valor de un elemento del array.
    echo $numero . "\n";
}

?>