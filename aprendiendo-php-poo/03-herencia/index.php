<?php
require_once 'clases.php';
$persona = new Persona();
//$persona->setNombre("Ariel");
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