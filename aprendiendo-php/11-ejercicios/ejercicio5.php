<?php
/*
Ejercicio 5. Hacer un programa que muestre todos los números entre dos números
que nos lleguen por la URL($_GET) 
*/
if (isset($_GET['numero_uno']) && isset($_GET['numero_dos'])) {
    $numero1=(int)$_GET['numero_uno'];
    $numero2=(int)$_GET['numero_dos'];
    if ($numero1<$numero2) {
        for ($i=$numero1; $i<=$numero2 ; $i++) { 
            echo $i.', ';  
        }    
    }else{
        echo 'El primer número debe ser menor al segundo';
    }
}else{
    echo 'Ingrese los dos números por GET';
}
