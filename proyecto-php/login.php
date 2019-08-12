<?php
//Iniciar la sesion y la conexion a la bbdd
require_once 'includes/conexion.php';

//recoger los datos del formulario
if(isset($_POST)){
    //Borrar error antiguo
    //en caso de que se loguee correctamente tendre que borrar la sesion
    //del error
    if (isset($_SESSION['error_login'])) {
        session_unset($_SESSION['error_login']);
    }
    //recoger datos del formulario
    //trim, elimina espacio en blanco
    $email=trim($_POST['email']);
    $password=$_POST['password'];

    //consulta para comprobar las credenciales del usuario
    $sql="SELECT * FROM usuarios WHERE email='$email'";
    $login=mysqli_query($db, $sql);
    if($login && mysqli_num_rows($login)==1){
        //sacamos un array asociativo de lo que sacamos de la BBDD
        $usuario=mysqli_fetch_assoc($login);
        //var_dump($usuario);
        //die();
        //comprobar la contrasenha /cifrar
        $verify=password_verify($password, $usuario['password']);
        if ($verify) {
            //utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario']=$usuario;            
        }else {
            //si algo falla enviar una sesion con el fallo
            $_SESSION['error_login']='Login Incorrecto';
        }
    }else {
        //mensaje de error
        $_SESSION['error_login']='Login Incorrecto';
    }
}
//redirigir al index.php
header('Location: index.php')
?>