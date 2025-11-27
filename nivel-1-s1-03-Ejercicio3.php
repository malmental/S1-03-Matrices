<?php

function palabraContieneCaracter (array $matrizDePalabras, string $caracter, bool $ignorarMayusculas = true): bool 
{
    // Se define una regla inicial: si la matriz está vacía, by default, la condicion se cumple.
    if (empty($matrizDePalabras)) {
        return true;
    }

    // Recorremos el Array
    foreach($matrizDePalabras as $palabra) {
        if ($ignorarMayusculas) {
            $palabraEnMinuscula = strtolower($palabra);
            $caracterEnMinuscula = strtolower($caracter);

            // Utilizaremos str_contains(), para saber si un string contiene otro devolviendo bool
            if (!str_contains($palabraEnMinuscula, $caracterEnMinuscula)) {
                return false; // y no necesitamos seguir comprobando
            }
        } else {
            // Y si consideramos mayusculas
            if (!str_contains($palabra, $caracter)) {
                return false;
            }
        }
    }
    return true;
}

// Ejemplos de verificación, creamos el array de la consigna
$palabras = ["hola", "Php", "Html"];

// Reemplace el caracter que se quiere comprobar, mayuscula o minuscula funcionará
$caracter1 = 'h';
$resultado1 = palabraContieneCaracter($palabras, $caracter1);
echo "¿Contienen '$caracter1'?: ";
var_dump($resultado1);

?>
