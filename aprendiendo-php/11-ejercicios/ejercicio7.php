<?php
/*
 * Ejercicio 7: Hacer un programa que muestre todos los números impares entre dos números
 * que nos llegue por la URL ($_GET) 
*/
//http://127.0.0.1/master_php/aprendiendo-php/11-ejercicios/ejercicio5.php?numero1=3&numero2=8
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    if($numero1<$numero2){
    for ($i=$numero1; $i<=$numero2; $i++){
        if ($i%2==!0) {
            echo $i.', ';
        }        
    }
} else {
    echo 'El número 1 debe ser menor al número 2';
}
} else {
    echo 'Los parámetros get no existen';
}