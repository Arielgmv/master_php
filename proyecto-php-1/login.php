<?php
//Iniciar la sesión y la conexión a la BBDD
require_once './includes/conexion.php';

/*echo '<pre>';
var_dump($_SESSION);
var_dump($_POST);
echo '</pre>';*/

if (!isset($_SESSION)) {
    session_start();
}

//Recoger datos del formulario
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM blog_master.usuarios WHERE usuarios.email = '$email'";
    $login = mysqli_query($db, $sql);
    /*echo '<pre>';
    var_dump($login);
    echo '</pre>';*/
    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        /*echo '<pre>';        
        var_dump($usuario);
        echo '</pre>';
        die();*/
        //Comprobar la contraseña / cifrar
        $verify = password_verify($password, $usuario['password']);
        if ($verify) {
            //Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

            if (isset($_SESSION['error_login'])) {
                session_unset($_SESSION['error_login']);
            }
        }else {
            //Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = 'Login incorrecto!';
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = 'Login incorrecto!';
    }
}

//Redirigir al index.php
header('Location: index.php');

/*echo '<pre>';        
var_dump($_SESSION['usuario']);
var_dump($_SESSION['error_login']);
echo '</pre>';*/