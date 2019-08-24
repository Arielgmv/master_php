<?php
    if (isset($_POST)) {
        require_once 'includes/conexion.php';
        $titulo=isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']):false;
        $descripcion=isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']):false;
        //(int) convierto el dato a un entero
        $categoria=isset($_POST['categoria']) ? (int) $_POST['categoria']:false;
        $usuario=$_SESSION['usuario']['id'];
        

        //validacion
        $errores=array();
        //solo comprobamos que no esten vacios
        if (empty($titulo)) {
            $errores['titulo']='El titulo no es valido';
        }
        if (empty($descripcion)) {
            $errores['descripcion']='La descripcion no es valida';
        }
        if (empty($categoria) && !is_numeric($categoria)) {
            $errores['categoria']='La categoria no es valida';
        }
        //var_dump($titulo);
        //var_dump($descripcion);
        //var_dump($categoria);
        //var_dump($errores);
        //die();
        if (count($errores)==0) {
            $sql="INSERT INTO entradas VALUES (NULL, $usuario, '$categoria', '$titulo', '$descripcion', CURDATE())";
            $guardar=mysqli_query($db, $sql);
        }else {
            $_SESSION['errores_entrada']=$errores;
        }
    }
    header('Location: index.php');
?>