<?php
require_once '../vendor/autoload.php';

//Conexion BBDD
$conexion = new mysqli("localhost", "root", "12345678", "notas_master");
$conexion->query("SET NAMES 'utf8'");

//Consulta a paginar
$consulta = $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

//var_dump($numero_elementos);

//Hacer paginación
$pagination = new Zebra_Pagination();

//Numero total elementos a paginar
$pagination = records($numero_elementos);

//Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page();
$notas = $conexion->query("SELECT * FROM notas LIMIT (($page -1)*$numero_elementos_pagina), $numero_elementos_pagina");