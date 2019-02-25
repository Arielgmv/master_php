<?php
$error = 'faltan valores';

if(empty($_POST['nombre']) && empty($_POST['apellidos']) && empty($_POST['edad']) && 
    empty($_POST['email']) && empty($_POST['pass'])){
    $error = 'ok';
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
} else {
    $error = 'faltan valores';
    header('Location:index.php?error='.$error);
}
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validación de Formularios PHP</title>
    </head>
    <body>
        
    </body>
</html>