<?php

function palabraContieneCaracter (array $matrizDePalabras, string $caracter, bool $ignorarMayusculas = true): bool 
{
    if (empty($matrizDePalabras)) {
        return true;
    }

    foreach($matrizDePalabras as $palabra) {
        if ($ignorarMayusculas) {
            $palabraEnMinuscula = strtolower($palabra);
            $caracterEnMinuscula = strtolower($caracter);

            // Utilizaremos str_contains(), para saber si un string contiene otro devolviendo bool
            if (!str_contains($palabraEnMinuscula, $caracterEnMinuscula)) {
                return false;
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

// Ejecucion del programa
$palabras = ["hola", "Php", "Html"];

// Reemplace el caracter que se quiere comprobar, mayuscula o minuscula funcionará
$caracter1 = 'h';
$resultado1 = palabraContieneCaracter($palabras, $caracter1);
echo "¿Contienen '$caracter1'?: ";
var_dump($resultado1);

?>
