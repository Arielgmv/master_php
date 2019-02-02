<?php
$cantantes=['Metallica', 'Pantera', 'Sepultura', 'Anthrax'];
var_dump($cantantes);
echo '<br/>';
asort($cantantes);
var_dump($cantantes);
echo '<hr/>';
//ordenar
$numeros=[3, 56, 23, 2];
sort($numeros);
var_dump($numeros);

//Añadir elementos Array
echo '<hr/>';
$cantantes[]='Slayer';
var_dump($cantantes);

echo '<hr/>';
array_push($cantantes, 'Megadeth');
var_dump($cantantes);

//Eliminar el último índice del Array
echo '<br/>';
array_pop($cantantes);
var_dump($cantantes);

//Eliminar un índice concreto
echo '<br/>';
unset($cantantes[2]);
var_dump($cantantes);

//Aleatorio
echo '<br/>';
$indice= array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta
echo '<hr/>';
var_dump(array_reverse($cantantes));

//Buscar dentro de un array
echo '<hr/>';
$resultado=array_search('Slayer', $cantantes);
echo $cantantes[$resultado];


//contar número de elementos
echo '<hr/>';
echo count($cantantes);
