<?php
require_once 'includes/conexion.php';

/*echo ('<pre>');
var_dump($_SESSION['usuario']);
var_dump($_SESSION['usuario']['id']);
var_dump($_GET['id']);
die();
echo ('</pre>');*/

if (isset($_SESSION['usuario']) && isset($_GET['id']) ) {
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";
    mysqli_query($db, $sql);
}

header("Location: index.php");
