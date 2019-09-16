<?php
require_once 'configuracion.php';
Configuracion::setColor('blue');
Configuracion::setEntorno('localhost');
Configuracion::setNewsletter(true);

echo Configuracion::$color.'<br />';
echo Configuracion::$entorno.'<br />';
echo Configuracion::$newsletter.'<br />';
//echo Configuracion::getColor();

//también se puede instaciar una clase estática
$configuracion = new Configuracion();
$configuracion::$color = "rojo";
echo $configuracion::$color;