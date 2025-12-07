<?php

$lista1 = ['Juan', 'Maria', 'Pedro', 'Lucia'];
$lista2 = ['Pedro', 'Ana', 'Carlos', 'Juan'];

function encontrarComunes ($lista1, $lista2) {
    return array_intersect($lista1, $lista2);
}

function mezclarListas($lista1, $lista2) {
    return array_merge(array_unique($lista1), array_unique($lista2));
}

function encontrarExclusivos ($lista1, $lista2) {
    return array_diff($lista1, $lista2);
}

function encontrarExclusivosLista2 ($lista1, $lista2) {
    return array_diff($lista2, $lista1);
}

$comunes = encontrarComunes($lista1, $lista2);
$mezcla = mezclarListas($lista1, $lista2);
$exclusivosLista1 = encontrarExclusivos($lista1, $lista2);
$exclusivosLista2 = encontrarExclusivosLista2 ($lista1, $lista2);

echo "Invitados en comun: " .implode(', ', $comunes) . PHP_EOL;
echo "Mezcla de los invitados: " .implode(', ', $mezcla) . PHP_EOL;
echo "Invitados exclusivos de la lista 1: " .implode(', ', $exclusivosLista1) . PHP_EOL;
echo "Invitados exclusivos de las lista 2: " .implode(', ',$exclusivosLista2) . PHP_EOL;

?>