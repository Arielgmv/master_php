<?php
/*
1. Una función
2. Validar un email con filter_var
3. Recoger variable por get y validarla
4. Mostrar el resultado
*/

function validarEmail($email){
    $valor=filter_var($email, FILTER_VALIDATE_EMAIL);
    echo ('<pre>');
    var_dump($valor);
    echo ('</pre>');    
    if ($valor) {
        echo ('Mail valido');
    }else {
        echo ('Mail no valido');
    }
}

if (isset($_GET['email'])) {
    echo '<p>El email ingresado es: '.$_GET['email'].'</p>';
    validarEmail($_GET['email']);
}else {
    echo '<p>Ingrese un email por GET</p>';
}

echo ('<pre>');
var_dump($_GET['email']);
echo ('</pre>');