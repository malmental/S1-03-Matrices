<?php

// Crea un programa que tenga una matriz indexada de 6 elementos
$frutas = ['Manzana', 'Platano', 'Naranja', 'Fresa', 'Kiwi', 'Mango'];

// Se muestra su tamaño y su contenido
echo "-- Array de Frutas --" . PHP_EOL;
echo "Tamaño: " . count($frutas) . PHP_EOL;

// Eliminar un elemento de la matriz anterior. 
// unset() elimina el elemento pero deja un "agujero" en el índice,
unset($frutas[2]);
print_r($frutas);

// Re indexar el salto generado por unset
$frutas = array_values($frutas);

// Print nuevo array
echo "-- Nuevo array re indexado --";
echo "Tamaño: " . count($frutas) . PHP_EOL;
print_r($frutas);

?>