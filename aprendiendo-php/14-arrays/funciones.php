<?php
$cantantes=['Metallica', 'Pantera', 'Sepultura', 'Anthrax'];
echo '<pre>';
var_dump($cantantes);
echo '</pre>';
echo '<br/>';
asort($cantantes);
echo '<pre>';
var_dump($cantantes);
echo '</pre>';
echo '<hr/>';
//ordenar
$numeros=[3, 56, 23, 2];
sort($numeros);
echo '<pre>';
var_dump($numeros);
echo '</pre>';

//Añadir elementos Array
echo '<hr/>';
$cantantes[]='Slayer';
echo '<pre>';
var_dump($cantantes);
echo '</pre>';

echo '<hr/>';
array_push($cantantes, 'Megadeth');
echo '<pre>';
var_dump($cantantes);
echo '</pre>';

//Eliminar el último índice del Array
echo '<br/>';
array_pop($cantantes);
echo '<pre>';
var_dump($cantantes);
echo '</pre>';

//Eliminar un índice concreto
echo '<br/>';
unset($cantantes[2]);
echo '<pre>';
var_dump($cantantes);
echo '</pre>';

//Aleatorio
echo '<br/>';
$indice= array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta
echo '<hr/>';
echo '<pre>';
var_dump(array_reverse($cantantes));
echo '</pre>';

//Buscar dentro de un array
echo '<hr/>';
$resultado=array_search('Pantera', $cantantes);
echo '<pre>';
var_dump($resultado);
echo '</pre>';
echo $cantantes[$resultado];

//contar número de elementos
echo '<hr/>';
echo count($cantantes);