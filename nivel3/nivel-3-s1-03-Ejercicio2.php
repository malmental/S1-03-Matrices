<?php

$strings = ['hola', 'juan', 'luis', 'pepe', 'maria'];

// Usando función anónima
$stringsPares = array_filter($strings, function ($string) {
    // strlen() devuelve la longitud del string
    // El operador % devuelve el resto de una división
    // Si el resto es 0, el número es par
    return strlen($string) % 2 == 0;
});

echo "Array original: " . PHP_EOL;
print_r($strings);

echo "Strings con longitud PAR: " . PHP_EOL;
print_r($stringsPares);

echo "Desglose de cada elemento" . PHP_EOL;
foreach ($strings as $string) {
    $longitud = strlen($string);
    $esPar = ($longitud % 2 == 0) ? "PAR " : "IMPAR ";
    echo "'$string' tiene $longitud caracteres → $esPar";
}

?>