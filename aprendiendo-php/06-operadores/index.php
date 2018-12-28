<?php
//operadores aritmeticos
$numero1=55;
$numero2=33;
echo 'Suma: '.($numero1+$numero2).'<br />';
echo 'Resta: '.($numero1-$numero2).'<br />';
echo 'Multiplicación: '.($numero1*$numero2).'<br />';
echo 'División: '.($numero1/$numero2).'<br />';
echo 'Módulo: '.($numero1%$numero2).'<br />';

// Operadores incremento y decremento
$year=2018;
echo $year.'<br />';
//Incremento
//$year=$year+1;
$year++;//es lo mismo que $year+1
echo $year.'<br />';
//pre incremento
//$year=1+$year;
++$year;//es lo mismo que 1+$year
echo $year.'<br />';
//predecremento
//$year=1-$year;
--$year;//es lo mismo que 1-$year
echo $year.'<br />';
//decremento
//$year=$year-1;
$year--;//es lo mismo que $year-1
echo $year.'<br />';

//operadores de asignación
$edad=55;
echo $edad.'<br />';
//$edad=$edad+5;
echo ($edad+=5).'<br />';
echo ($edad-=5).'<br />';
echo ($edad*=5).'<br />';
echo ($edad/=5).'<br />';
?>

