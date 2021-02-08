<?php

/* 
 * Ejercicio 2.
 * 1. Una función
 * 2. Validar un email con filter_var
 * 3. Recoger una variable por get y validarla
 * 4. Mostrar el resultado
 */
echo ('<pre>');
var_dump($_GET['email']);
echo ('</pre>');

 function validarEmail($email){
    $status="No válido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status="Válido";
    }
    return $status;
}
if(isset($_GET['email'])){
    echo validarEmail($_GET["email"]);
}else{
    echo 'Pasa por get un email...';
}