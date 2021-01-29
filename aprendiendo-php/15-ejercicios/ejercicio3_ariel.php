<?php
/*
Ejercicio 3. Programa que compruebe si una variable está vacia
y si está vacia, rellenarla con texto en minúsculas y mostrarlo en
mayúsculas y negrita
*/
$variable='';
echo '<pre>';
var_dump($variable);
echo '</pre>';
if (empty($variable)) {
    $variable='texto en minúsculas';
    echo '<strong>'.strtoupper($variable).'</strong>';
}else{
    echo 'La variable no está vacia';
}