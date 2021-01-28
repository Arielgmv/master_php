<?php

/* 
 * Ejercicio1. Hacer un programa que tenga un array con 8 números enteros
 * que haga lo siguiente:
 * Recorrerlo y mostrarlo
 * Ordenarlo y mostrarlo
 * Mostrar su longitud
 * buscar algún elemento 
 */
function mostrarArray($numeros){
    $resultado='';    
    foreach($numeros as $numero){
        //$resultado=$resultado.$numero.''<br/>;
        $resultado.= $numero.'<br/>';        
    }
    return $resultado;
}

echo 'Recorrer y mostrar <br/>';
$numeros=array(5, 8, 65, 24, 1, 0, 6, 9);
echo mostrarArray($numeros);
echo '<hr/>';

echo 'Ordenar y mostrar <br/>';
sort($numeros);
echo mostrarArray($numeros);
echo '<hr/>';

//contar número de elementos
echo 'Número de elementos del array <br/>';
echo count($numeros);

//Buscar dentro de un array
echo '<hr/>';
$busqueda=2;
echo 'Buscar dentro del array el número '.$busqueda.'<br/>';
$search=array_search($busqueda, $numeros);
echo '<pre>';
var_dump($search);
echo '</pre>';
if(!empty($search)){
    echo '<h4>El número '.$busqueda.' existe en el array, en el índice '.$search.'</h4>';
}else{
    echo '<h4>El número '.$busqueda.' no existe en el array</h4>';
}