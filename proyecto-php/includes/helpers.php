<?php
//Librería con las funciones PHP
//le estoy pasando el array de errores y le paso el campo (yo le estoy pasando - string)
//necesitamos pasarle dos parametros $errores y $campo
function mostrarError($errores, $campo){
    //por defecto alerta irá vacia
    $alerta='';
    if(isset($errores[$campo]) && !empty($campo)){
        //voy a mostrar el error accediendo a la posicion del array en concreto que quiero
        $alerta="<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    //en caso de que haya un error
    return $alerta;
}

//borramos los errores una vez que terminanos de mostrarlos por primera vez
function borrarErrores(){    
    $borrado=false;
    
    if(isset($_SESSION['errores'])){
        $_SESSION['errores']=null;
        $borrado=session_unset($_SESSION['errores']);
    }
    
    if(isset($_SESSION['completado'])){
        $_SESSION['completado']=null;
        $borrado=session_unset($_SESSION['completado']);
    }
    
    return $borrado;
}