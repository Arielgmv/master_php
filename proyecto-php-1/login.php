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
    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        echo '<pre>';
        var_dump($usuario);
        echo '</pre>';
        die();

        //Comprobar la contraseña / cifrar
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        var_dump($password_segura);
        die();
    }   
}






//Utilizar una sesión para guardar los datos del usuario logueado

//Si algo falla enviar una sesión con el fallo

//Redirigir al index.php