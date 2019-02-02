<?php
/* 
 * Array: Colección o un conjunto de datos/valores
 * bajo un único nombre
 * Para acceder a esos valores podemos usar un índice número
 * o alfanumérico 
 */
$pelicula='Batman';
$peliculas= array('Batman', 'Spiderman', 'Lord of the rings');
var_dump($peliculas);
echo '<hr/>';
var_dump($peliculas[1]);
echo '<hr/>';
$cantantes=['Metallica', 'Pantera', 'Sepultura'];
var_dump($cantantes);
echo '<hr/>';
echo $cantantes[1];
echo '<hr/>';
echo $peliculas[2];
echo '<hr/>';
echo '<h1>Listado de Películas</h1>';
echo '<ul>';
//recorrer con for
for($i=0; $i<count($peliculas) ; $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';
//recorrer con foreach
echo '<hr/>';
echo '<h1>Listado de cantantes</h1>';
foreach ($cantantes as $cantante) {
    echo '<ul><li>'.$cantante.'</li></ul>';
}