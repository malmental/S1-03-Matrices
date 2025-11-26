<?php

// Crea un programa que tenga una matriz indexada de 6 elementos
$frutas = ['Manzana', 'Platano', 'Naranja', 'Fresa', 'Kiwi', 'Mango'];

// Se muestra su tamaño y su contenido
echo "-- Array de Frutas --\n";
echo "Tamaño: " . count($frutas) . "\n";

// Eliminar un elemento de la matriz anterior. 
// unset() elimina el elemento pero deja un "agujero" en el índice,
unset($frutas[2]);
print_r($frutas);

// Re indexar el salto generado por unset
$frutas = array_values($frutas);

// Print nuevo array
echo "-- Nuevo array re indexado --\n";
echo "Tamaño: " . count($frutas) . "\n";
print_r($frutas);

?>