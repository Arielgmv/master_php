<?php
//require_once './includes/conexion.php';
session_start();
if (isset($_POST)) {
    //Recoger los valores del formulario de registro
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    } else {
        $nombre = false;
    }    
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false; /*operador ternario*/
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Array de errores
    $errores = array();
    
    //Validar los datos antes de guardar en la BBDD
    //Validar nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    //Validar apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    }else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son válidos";
    }

    //Validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    }else {
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }

    //Validar password
    if (!empty($password)) {
        $password_validado = true;
    }else {
        $password_validado = false;
        $errores['password'] = "El password esta vacio";
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $guardar_usuario = true;
        //insertar usuario en la BBDD
        /*$sql="INSERT INTO blog_master.usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$password', CURDATE())";
        $insert=mysqli_query($db, $sql);
        if ($insert) {
            echo 'Datos ingresados correctamente';
        } else {
            echo 'Error: '.mysqli_error($db);
        }*/
        
    } else {
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}


echo '<pre>';
var_dump($_POST);
var_dump($errores);
var_dump($nombre);
var_dump($apellidos);
var_dump($email);
var_dump($password);
var_dump($sql);
var_dump($_SESSION['errores']);
echo '</pre>';