<?php

/* 
 * Variables locales: Son las que se definen dentro de una función
 *  y no pueden ser usadas fuera de la función, sólo están disponibles
 * dentro, a no se ser que haga un return.
 * 
 * Variables globales: Son las que se declaran fuera de una función
 * y están disponibles dentro y fuera de las funciones
 */
//Variable global
$frase='Ni los genios son tan genios, ni los mediocres tan mediocres';
echo $frase;
function holaMundo(){
    global $frase;
    echo '<h1>'.$frase.'</h1>';
    $year=2019;
    echo '<h1>'.$year.'</h1>';
    return $year;
}
echo holaMundo();
//funciones variables
function buenosDias(){
    return 'Hola! Buenos Días';
}
function buenasTardes(){
    return 'Hola! Buenas Tardes';
}

function buenasNoches(){
    return '<h3>Te vas a dormir yá, buenas noches</h3>';
}
$horario='buenasNoches';
echo $horario();