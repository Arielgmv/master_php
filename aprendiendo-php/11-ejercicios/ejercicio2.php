<?php

/* 
 * Ejercicio 2. Escribir un script en PHP que nos muestre por pantalla todos los números pares del 1 al 100
 */
//$numero=0;
for($i=1; $i<=100; $i++){
    //$numero=$i;
    if($i%2==0){
        echo $i.', ';
    }    
}
