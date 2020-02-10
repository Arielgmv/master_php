<?php

/* 
 * Ejercicio 3. Programa que compruebe si una variable está vacia y si está vacia
 * rellenarla con texto en minúscula y mostrarlo en mayúsculas y negrita
 */

$texto='';
if(empty($texto)){
    $texto='hola yo soy el relleno de la variable texto';
    $textoMAYUS= strtoupper($texto);
    echo '<strong>'.$textoMAYUS.'</strong>';
}else{
    echo 'La variable tiene este contenido dentro: '.$texto;
}