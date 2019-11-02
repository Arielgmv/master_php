<?php
require_once '../vendor/autoload.php';
$frutas = array("manzanas", "naranjas", "sandias");
\FB::log($frutas);
\FB::log("Hola Mundo!!");

\FB::log("Muestrame en consola");

$nombres = array("ejecutivo" => "Antonio", "empleado" => "Antonio", "Juan");
\FB::log($nombres);
echo "Hola Mundo!!".$nombres['ejecutivo'];