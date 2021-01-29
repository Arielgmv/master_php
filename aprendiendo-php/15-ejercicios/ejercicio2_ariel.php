<?php
/*
Escribir un programa con PHP que añada valores a un array mientras que su longitud 
sea menor a 120 y luego mostrarlo por pantalla
*/
$numeros=array();
echo '<pre>';
var_dump($numeros);
echo '</pre>';
//$valor='primer valor';
for ($i=0; $i<=118; $i++) { 
    array_push($numeros, $i);
}
echo '<pre>';
var_dump($numeros);
echo '</pre>';
echo count($numeros);
echo '<h2>Listado de números</h2>';
foreach ($numeros as $numero) {
    echo '<ul><li>'.$numero.'</li></ul>';
}