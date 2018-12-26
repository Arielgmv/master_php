<?php
/*
 Tipos de datos 
 * entero (int / integer) = 99
 * coma flotante / decimales (float / double) = 3.45
 * cadenas (string) = 'hola yo soy un string'
 * boleano (bool) = true false
 * null
 * array (colección de datos)
 * objetos
 */
$numero=100;
$decimal=27.9;
$texto='Soy un texto $';
/*debemos utilizar comilla doble para que muestre el valor de la
variable número*/
$texto_1="Soy un texto \n $numero";
/*esto es más rapido que con comilla doble, con comilla doble
PHP está esperando una variable para imprimimir su valor, tarda un
poco más a nivel de procesador*/
$texto_2='Soy un texto '.$numero;
$cadena='PHP';
$verdadero=false;
$nula=null;
echo gettype($numero).'<br />';
echo gettype($texto).'<br />';
echo gettype($decimal).'<br />';
echo gettype($cadena).'<br />';
echo gettype($verdadero).'<br />';
echo gettype($nula).'<br />';
echo $texto.'<br />';
echo $texto_1.'<br />';
echo $texto_2.'<br />';
//Debugear (ver que tiene dentro)
$mi_nombre='Ariel Muñoz Atux Empleos';
var_dump($mi_nombre);
echo '<br />';
$mi_array[]='prueba 1';
$mi_array[]='prueba de 2';
var_dump($mi_array);
?>