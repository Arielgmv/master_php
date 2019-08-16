<?php
//conexion
$servidor= 'localhost';
$usuario= 'root';
$password= '12345678';
$basededatos= 'blog_master';
$db=mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesion, y ya podemos utilizar las sesiones
if (!isset($_SESSION)) {
    session_start();
}