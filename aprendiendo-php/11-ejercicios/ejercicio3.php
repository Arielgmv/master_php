<?php
/*Ejercicio 3. Imprimir los cuadrados (un numero multiplicado por si mismo)
de los 40 primeros numeros naturales
PD: Utilizar bucle while*/
for ($i=0; $i<=40 ; $i++) { 
    $cuadrado=$i*$i;
    echo $cuadrado.', ';
}
echo '<hr>';
$numero=0;
while ($numero<=40) {
    $cuadrado=$numero*$numero;
    echo $cuadrado.', ';
    $numero++;
}