<?php
//Capturar excepciones, en codigo susceptible a errores
try{
    if(isset($_GET['id'])){
        echo "<h1>El parámetro es: {$_GET['id']}<h1/>";
    }else{
        throw new Exception('Faltan parámetros por la url');
    }    
} catch(Exception $e){
    echo "Ha habido un error: ".$e->getMessage();
}

//http://127.0.0.1/master_php/aprendiendo-php-poo/11-errores/index.php?id=23