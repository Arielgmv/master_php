<?php
//conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '12345678';
$basededatos = 'blog_master';
$db=mysqli_connect($servidor, $usuario, $password, $basededatos);

//Consulta para configurar la codificacion de caracteres
//Cuando venga una palabra con ñ o tildes funcionara bien 
mysqli_query($db, "SET NAMES 'utf8'");


//Comprobar la conexión
/*if (mysqli_connect_errno()) {
    echo 'La conexión a la base de datos MYSQL ha fallado <br>'.mysqli_connect_error();
} else {
    echo 'Conexión realizada correctamente';
}

echo ('<pre>');
var_dump($db);
echo ('</pre>');

echo ('<pre>');
var_dump(mysqli_connect_errno());
echo ('</pre>');

echo ('<pre>');
var_dump(mysqli_connect_error());
echo ('</pre>');*/