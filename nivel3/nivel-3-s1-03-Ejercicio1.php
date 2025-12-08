<?php

$numeros = [2, 3, 4, 5, 6];

// Opción 1: Usando una función anónima (la más común)
$numerosCubicados = array_map(function ($numero) {
    return $numero ** 3;  // Operador ** eleva a la potencia
}, $numeros);

echo "Array original: " . implode(", ", $numeros) . PHP_EOL;
echo "Array al cubo: " . implode(", ", $numerosCubicados) . PHP_EOL;

// Opción 2: Creando una funcion
function elevarAlCubo($numero)
{
    return $numero ** 3;
}

$resultado = array_map('elevarAlCubo', $numeros);
echo "Con función nombrada: " . implode(", ", $resultado) . PHP_EOL;

// Opción 3: Usando arrow function
$resultado2 = array_map(fn($n) => $n ** 3, $numeros);
echo "Con arrow function: " . implode(", ", $resultado2) . PHP_EOL;

?>