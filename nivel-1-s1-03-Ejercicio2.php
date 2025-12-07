<?php

$frutas = ['Manzana', 'Platano', 'Naranja', 'Fresa', 'Kiwi', 'Mango'];

echo "-- Array de Frutas --" . PHP_EOL;
echo "Tamaño: " . count($frutas) . PHP_EOL;

unset($frutas[2]);
print_r($frutas);

// Re indexar el salto generado por unset
$frutas = array_values($frutas);

echo "-- Nuevo array re indexado --";
echo "Tamaño: " . count($frutas) . PHP_EOL;
print_r($frutas);

?>