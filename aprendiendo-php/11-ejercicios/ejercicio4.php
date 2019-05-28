<?php

/* 
 * Ejercicio 4. Recoger dos números por la url(parámetros GET) y hacer todas las
 * operaciones básicas de una calculadora (suma, resta, multiplicación y división)
 * de esos dos números
 */
//http://127.0.0.1/master_php/aprendiendo-php/11-ejercicios/ejercicio4.php?numero1=3&numero2=8
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1=(int)$_GET['numero1'];//se cambia el tipo de dato a int
    $numero2=(int)$_GET['numero2'];
} else {
    $numero1=1;
    $numero2=1;
}
echo 'Primer número es: '.$numero1.' y número 2 es: '.$numero2.'<br/>';
echo 'Suma es: '.($numero1+$numero2).'<br/>';
echo 'Resta es: '.($numero1-$numero2).'<br/>';
echo 'Multiplicacion es: '.($numero1*$numero2).'<br/>';
echo 'Division es: '.($numero1/$numero2).'<br/>';

