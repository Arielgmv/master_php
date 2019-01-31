<?php
//Debuggear
$nombre='Ariel Muñoz';
var_dump($nombre);

//fechas
echo '<br/>';
echo date('d-m-Y');
echo '<br/>';
echo time();

//Matemáticas
echo '<br/>';
echo 'Raíz Cuadrada de 25: '. sqrt(25);
echo '<br/>';
echo 'Número aleatorio: '. rand();
echo '<br/>';
echo 'Número aleatorio entre 10 y 40: '. rand(10, 40);
echo '<br/>';
echo 'Número pi: '. pi();
echo '<br/>';
echo 'Redondeo sin decimales: '. round(7.5687464);
echo '<br/>';
echo 'Redondeo con dos decimales: '. round(7.5687464, 2);