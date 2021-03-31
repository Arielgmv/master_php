<?php
if (isset($_POST)) {
    //Conexión a la base de datos
    require_once './includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    //Array de errores
    $errores = array();

    //Validar los datos antes de guardar en la BBDD
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    /*echo '<pre>';
    var_dump($nombre);   
    var_dump($nombre_validado);
    var_dump($errores);   
    var_dump(count($errores));    
    echo '</pre>';*/

    if (count($errores) == 0) {        
        //insertar categoría en la BBDD
        $sql="INSERT INTO blog_master.categorias VALUES (null, '$nombre')";
        $guardar=mysqli_query($db, $sql);        
    } 
}

header('Location: index.php');