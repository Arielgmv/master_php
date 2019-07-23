<?php

if(isset($_POST)){
    //Conexion a la base de datos
    require_once 'includes/conexion.php';
    //Iniciar sesion
    if(!isset($_SESSION)){
        session_start();
    }
    
    
    /*if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
    }else{
        $nombre=false;
    }*/
    //Recoger los valores del formulario de registro
    $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos=isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email=isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password=isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    
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
        $errores['apellidos']="Los apellidos no son validos";
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
        $errores['password']="El password esta vacio";
    }
    $guardar_usuario = false;
    if(count($errores)==0){
        $guardar_usuario = true;
        //Cifrar el password
        $password_segura=password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        
        /*var_dump($password);
        var_dump($password_segura);
        var_dump(password_verify("hola", $password_segura));
        die();*/
        //Insertar usuario en la tabla usuario
        $sql="INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar=mysqli_query($db, $sql);

        /*var_dump(mysqli_error($db));
        die();*/

        if($guardar){
            $_SESSION['completado']="El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general']="Fallo al guardar el usuario";
        }
    }else{
        $_SESSION['errores'] = $errores;        
    }
}
header('Location: index.php');