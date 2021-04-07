<?php
//Conexión a la base de datos
require_once './includes/conexion.php';

//Iniciar sesión
if (!isset($_SESSION)) {
    session_start();
}

/*echo '<pre>';
var_dump($_SESSION);
var_dump($_SESSION['usuario']['id']);
die();
echo '</pre>';*/

if (isset($_POST)) {
    //Recoger los valores del formulario de registro
    if (isset($_POST['nombre'])) {
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    } else {
        $nombre = false;
    }    
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false; /*operador ternario*/
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;/*mysqli_real_escape_string escapa a los caracteres (ejecuta como string) y no ejecuta en MySQL, evitamos inyección SQL*/    

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

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $guardar_usuario = true;
        $usuario = $_SESSION['usuario']['id'];
        
        //Comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        echo '<pre>';
        var_dump($isset_email);
        var_dump($isset_user);
        die();
        echo '</pre>';

        if ($isset_user['id'] == $usuario || empty($isset_user)) {
            //actualizar usuario en la BBDD              
            $sql="UPDATE blog_master.usuarios SET nombre ='$nombre', apellidos = '$apellidos', email = '$email' WHERE id= $usuario;";
            $guardar=mysqli_query($db, $sql);
            if ($guardar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "Tus datos se han actualizado con éxito";            
            } else {
                $_SESSION['errores']['general'] = "Fallo al actualizar tus datos!";
            }
        } else {
            $_SESSION['errores']['general'] = "El correo ya existe";
        }
    } else {
        $_SESSION['errores'] = $errores;        
    }
}

header('Location: mis-datos.php');