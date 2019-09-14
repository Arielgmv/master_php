<?php
require_once 'clases.php';
$persona = new Persona();
$persona->setNombre("Ariel");
//var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(1.90);
echo $informatico->sabeLenguajes("PHP, Java, Javascript");
//var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);