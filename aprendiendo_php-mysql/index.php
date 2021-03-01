<?php
//Conectar a la base de datos
//$conexion=mysqli_connect('localhost', 'root', '12345678', 'phpmysql');
$conexion=mysqli_connect('localhost', 'root', '12345678', 'blog_master');

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
//$query=mysqli_query($conexion, "SELECT * FROM notas");
$query=mysqli_query($conexion, "SELECT * FROM blog_master.usuarios");

/*while($nota=mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
}*/
while($usuarios=mysqli_fetch_assoc($query)){
    /*echo ('<pre>');
    var_dump($usuarios);
    echo ('</pre>');*/
    echo '<h2>'.$usuarios['nombre'].'</h2>';
    echo $usuarios['email'].'<br>';
}
//Insertar en la base de datos desde PHP
/*$sql="INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert=mysqli_query($conexion, $sql);

if($insert){
    echo 'Datos insertados correctamente';
}else{
    echo 'Error: '.mysqli_error($conexion);
}*/

$sql="INSERT INTO blog_master.usuarios VALUES (null, 'Nombre desde PHP', 'Apellido desde PHP', 'php@php.com', 'password', CURDATE())";
$insert=mysqli_query($conexion, $sql);

if ($insert) {
    echo 'Datos ingresados correctamente';
} else {
    echo 'Error: '.mysqli_error($conexion);
}

