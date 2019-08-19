<?php
require_once 'coche.php';
//instacio, creo el objeto coche
$coche=new Coche('Amarillo', 'Renault', 'Clio', 150, 200, 5);
$coche1=new Coche('Negro', 'Toyota', 'Rav4', 190, 2400, 5);
$coche2=new Coche('Azul', 'Ford', 'Fiesta', 180, 1500, 5);
//como esta public puedo modificar desde fuera (no recomendable)
//$coche->color='plomo';
//var_dump($coche);
//var_dump($coche1);
//var_dump($coche2);
$coche->color='plomo';
$coche->setMarca('Audi');
//var_dump($coche);
//var_dump($coche->modelo);
?>