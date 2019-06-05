<?php
//Conectar a la base de datos
$conexion=mysqli_connect('localhost', 'root', '12345678', 'phpmysql');

//Comprobar la conexion
if(mysqli_connect_errno()){
    echo 'LA conexion a la base de datos MYSQL ha fallado'.mysqli_connect_error();
}else{
    echo 'Conexion realizada correctamente';
}