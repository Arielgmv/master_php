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
    echo '<ul><li>'.$cantante.'</li>6</ul>';
}
echo '<hr/>';
//Arrays asociativos
$personas=array(
    'nombre'=>'Ariel',
    'apellidos'=>'Muñoz',
    'web'=>'www.atuxempleos.com'
);
var_dump($personas);
echo '<br/>';
var_dump($personas['apellidos']);
echo '<br/>';
echo($personas['apellidos']);

echo '<hr/>';
//Arrays multidimensionales
$contactos=array(
    array(
        'nombre'=>'Ana',
        'apellido'=>'Garcia'
    ),
    array(
        'nombre'=>'Oswaldo',
        'apellido'=>'Soliz'
    ),
    array(
        'nombre'=>'Mauricio',
        'apellido'=>'Villegas'
    ),
    array(
        'nombre'=>'Rodrigo',
        'apellido'=>'Soliz'
    ),
);
var_dump($contactos);