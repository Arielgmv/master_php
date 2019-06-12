<?php
//conexion
$servidor= 'localhost';
$usuario= 'root';
$password= '12345678';
$basededatos= 'blog_master';
$db=mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");