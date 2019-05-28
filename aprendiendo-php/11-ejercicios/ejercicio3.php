<?php
/*
 *Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
 * (un número multiplicado por si mismo) de los 40 primeros números naturales
 *PD: Utilizar bucle while
 */
$multiplicacion=1;
for ($i=1; $i<=40; $i++){
    $multiplicacion=$i;
    $multiplicacion=$multiplicacion*$i;
    echo $multiplicacion.', ';    
};
echo '<hr/>';
$multiplicacion=1;
$i=1;
while ($i<=40) {
    $multiplicacion=$i;
    $multiplicacion=$multiplicacion*$i;
    echo $multiplicacion.', ';
    $i++;
};