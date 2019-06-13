<?php
if(isset($_POST)){
    /*if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
    }else{
        $nombre=false;
    }*/
    //Recoger los valores del formulario de registro
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : false;    
    $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos'] : false;    
    $email=isset($_POST['email']) ? $_POST['email'] : false;
    $password=isset($_POST['password']) ? $_POST['password'] : false;
    
    //Array de errores
    $errores=array();
    //Validar los datos antes de guardarlos en la base de datos
    
    //Validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        //echo "El nombre es valido";
        $nombre_validado=true;
    }else{
        $nombre_validado=false;
        $errores['nombre']="El nombre no es valido";
    }
    //Validar campo apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado=true;
    }else{
        $apellidos_validado=false;
        $errores['apellidos']="Los apellidos no es valido";
    }
    //Validar campo email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado=true;
    }else{
        $email_validado=false;
        $errores['email']="El email no es valido";
    }
    //Validar campo password
    if(!empty($password)){
        $password_validado=true;
    }else{
        $password_validado=false;
        $password['password']="El password esta vacio";
    }
    if(){
        
    }
}
