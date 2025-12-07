<?php

$numeros = [2, 3, 4, 5, 6];

// Opción 1: Usando una función anónima (la más común)
$numerosCubicados = array_map(function ($numero) {
    return $numero ** 3;  // Operador ** eleva a la potencia
}, $numeros);

echo "Array original: " . implode(", ", $numeros) . "\n";
echo "Array al cubo: " . implode(", ", $numerosCubicados) . "\n\n";

// Opción 2: Usando una función nombrada
function elevarAlCubo($numero)
{
    return $numero ** 3;
}

$resultado = array_map('elevarAlCubo', $numeros);
echo "Con función nombrada: " . implode(", ", $resultado) . "\n\n";

// Opción 3: Usando arrow function (PHP 7.4+)
$resultado2 = array_map(fn($n) => $n ** 3, $numeros);
echo "Con arrow function: " . implode(", ", $resultado2) . "\n";

?>