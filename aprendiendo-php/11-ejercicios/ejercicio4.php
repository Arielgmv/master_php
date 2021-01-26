<?php
/*Recoger dos numeros por la url (GET) y hacer todas las operaciones basicas de una calculadora
(suma, resta, multiplicacion y division) de esos dos numeros*/
/*$numero1=4;
$numero2=7;*/
if (isset($_GET['numero_uno']) && isset($_GET['numero_dos'])) {
    $numero1=(int)$_GET['numero_uno'];
    $numero2=(int)$_GET['numero_dos'];
    //$numero2=7;
    echo 'La suma es: '.($numero1+$numero2).'<br>';
    echo 'La resta es: '.($numero1-$numero2).'<br>';
    echo 'La multiplicación es: '.($numero1*$numero2).'<br>';
    echo 'La división es: '.($numero1/$numero2).'<br>';
}else{
    echo 'Ingrese los dos números por GET';
}

