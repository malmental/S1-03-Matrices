<?php

$strings = ['hola', 'juan', 'luis', 'pepe', 'maria'];

// Opción 1: Usando función anónima
$stringsPares = array_filter($strings, function ($string) {
    // strlen() devuelve la longitud del string
    // El operador % devuelve el resto de una división
    // Si el resto es 0, el número es par
    return strlen($string) % 2 == 0;
});

echo "Array original:\n";
print_r($strings);

echo "\nStrings con longitud PAR:\n";
print_r($stringsPares);

echo "\n--- Desglose de cada elemento ---\n";
foreach ($strings as $string) {
    $longitud = strlen($string);
    $esPar = ($longitud % 2 == 0) ? "PAR ✓" : "IMPAR ✗";
    echo "'$string' tiene $longitud caracteres → $esPar\n";
}

?>