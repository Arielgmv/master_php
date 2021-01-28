<?php
/*
Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 números enteros
y que haga lo siguiente:
- Recorrerlo y mostrarlo
- Ordenarlo y mostrarlo
- Mostrar su longitud
- Buscar algún elemento
*/
$enteros=array(56, 65, 89, 23, 45, 6, 95, 46);
echo '<pre>';
var_dump($enteros);
echo '</pre><hr>';

//Recorrerlo y mostrarlo
echo '<h2>Recorrerlo y mostrarlo</h2>';
foreach ($enteros as $entero) {
    echo '<ul><li>'.$entero.'</li></ul>';
}
echo '<hr>';
//Ordenarlo y mostrarlo
echo '<h2>Ordenarlo y mostrarlo</h2>';
sort($enteros);
foreach ($enteros as $entero) {
    echo '<ul><li>'.$entero.'</li></ul>';
}
echo '<hr>';
//Mostrar su longitud
echo '<h2>Mostrar su longitud</h2>';
echo 'Su longitud es: '.count($enteros);
echo '<hr>';
//Buscar algún elemento
echo '<h2>Buscar algún elemento</h2>';
$resultado=array_search('95', $enteros);
echo '<pre>';
var_dump($enteros);
var_dump($resultado);
echo '</pre>';
echo 'El elemento buscado es: '.$enteros[$resultado];