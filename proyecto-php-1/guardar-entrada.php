<?php
if (isset($_POST)) {
    //Conexión a la base de datos
    require_once './includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];    

    //Array de errores
    $errores = array();

    //Validar los datos antes de guardar en la BBDD
    if (empty($titulo)) {
        $errores['titulo'] = "El titulo no es válido";
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = "La descripcion no es válida";
    }

    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = "La categoria no es válida";
    }

    /*echo '<pre>';
    var_dump($errores);
    die();
    echo '</pre>';*/

    if (count($errores) == 0) {        
        //insertar categoría en la BBDD
        $sql="INSERT INTO blog_master.entradas VALUES (null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        $guardar=mysqli_query($db, $sql);        
    }else {
        $_SESSION['errores_entrada'] = $errores;
    }
}

header('Location: index.php');
