<?php
if(isset($_POST['submit'])){
    /*if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
    }else{
        $nombre=false;
    }*/   
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email=isset($_POST['email']) ? $_POST['email'] : false;
    $password=isset($_POST['password']) ? $_POST['password'] : false;
    
    //Array de errores
    $errores=array();
    
    //Validar los datos antes de guardarlos en la base de datos

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        //echo "el nombre es valido";
        $nombre_validado=true;
    }else {
        //echo $errores['nombre']="El nombre no es valido";
        $nombre_validado=false;
        $errores['nombre']="El nombre no es valido";
    }
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado=true;
    }else {
        $apellidos_validado=false;
        $errores['apellidos']="Los apellidos no es valido";
    }
}
