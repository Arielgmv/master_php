<?php
if (!isset($_SESSION)) {
    session_start();
}
//comprobamos si la sesion de usuario existe
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}
?>