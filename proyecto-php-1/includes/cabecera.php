<?php require_once 'conexion.php'; ?>
<?php require_once 'helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!--esto permite meter ñ, tildes y símbolos raros-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
    <!--Cabecera-->
    <header id="cabecera">
        <!--Logo-->
        <div id="logo">
            <a href="./index.php">Blog de Videojuegos</a>
        </div>
        <!--Menu-->        
        <nav id="menu">
            <ul>
                <li>
                    <a href="./index.php">Inicio</a>
                </li>
                <?php
                    $categorias = conseguirCategorias($db);                    
                    if(!empty($categorias)) :
                        while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                            <li>
                                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                            </li>    
                <?php
                        endwhile; 
                    endif;
                ?>
                <li>
                    <a href="./index.php">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="./index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <?php
        /*echo ('<pre>');
        var_dump($categorias);
        echo ('</pre>');*/
        ?>
    </header>

    <div id="contenedor">