<?php

/* 
 * Ejercicio 4. Crear un script que tenga 4 variables, una de tipo array,
 * otra de tipo string, otra int y otra booleana y que imprima un mensaje
 * segun el tipo de variable que sea
 */
$peliculas= array('Batman', 'Spiderman', 'Lord of the rings');
$texto='hola, soy el texto';
$numero=21;
$boleano=TRUE;
if(is_array($peliculas)){
    echo '<h1>Es un array</h1>';
}
if(is_string($texto)){
    echo '<h1>'.$texto.'</h1>';
}
if(is_integer($numero)){
    echo '<h1>'.$numero.'</h1>';
}
if(is_bool($boleano)){
    echo '<h1>El boleano es verdadero</h1>';
}