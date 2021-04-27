<?php
require_once 'clases.php';
$persona = new Persona();
$persona->setNombre("Ariel");
$persona->setApellidos('Muñoz Villegas');
$persona->setAltura(1.73);
$persona->setEdad(40);
$persona->hablar();
$persona->caminar();
echo('<pre>');
var_dump($persona);
echo('</pre>');

$informatico = new Informatico();
//$informatico->setAltura(1.90);
//echo $informatico->sabeLenguajes("PHP, Java, Javascript");
echo('<pre>');
var_dump($informatico);
echo('</pre>');

$tecnico = new TecnicoRedes();
echo('<pre>');
var_dump($tecnico);
echo('</pre>');