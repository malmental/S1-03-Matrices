<?php

// Paso 1: creamos la funcion para saber si un numero es primo
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function esPrimo ($numero) {
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si no encuentra divisores, retorna true
    return true;
}


// Paso 2: utilizar array_reduce(array, función_reductora, valor_inicial);
$sumaPrimos = array_reduce($numeros, function($acumulador, $numero){
    if(esPrimo($numero)) {
        echo "$numero es primo -> acumuldor: $acumulador + $numero = " . ($acumulador + $numero) . PHP_EOL;
        return $acumulador + $numero;
    } else {
        echo "$numero no es primo -> acumulador sigue en: $acumulador" . PHP_EOL;
        return $acumulador;
    }
}, 0);

echo "Suma TOTAL de Primos: $sumaPrimos";

?>

