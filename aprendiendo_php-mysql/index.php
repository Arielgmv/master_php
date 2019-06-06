<?php
//Conectar a la base de datos
$conexion=mysqli_connect('localhost', 'root', '12345678', 'phpmysql');

//Comprobar la conexion
if(mysqli_connect_errno()){
    echo 'La conexion a la base de datos MYSQL ha fallado <br>'.mysqli_connect_error();
}else{
    echo 'Conexion realizada correctamente';
}
echo '<br>';
//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query=mysqli_query($conexion, "SELECT * FROM notas");

while($nota=mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
}

//Insertar en la base de datos desde PHP
$sql="INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert=mysqli_query($conexion, $sql);

if($insert){
    echo 'Datos insertados correctamente';
}else{
    echo 'Error: '.mysqli_error($conexion);
}

