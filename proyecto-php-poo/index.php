<?php
//mostrar errores en PHP: https://stackify.com/display-php-errors/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
require_once 'controllers/ErrorController.php';

function show_error(){
    $error = new errorController();    
    $error->index();
}

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
    //var_dump($nombre_controlador);
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;
}else{
    show_error();
    //echo "La pagina que buscas no existe 1";
    exit();
}

if (class_exists($nombre_controlador)) {
    
    $controlador = new $nombre_controlador();
    //$_GET['action'] es variable
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        //se llama con http://127.0.0.1/master_php/proyecto-php-poo/?controller=Pedido&action=index
        //haciendo lo siguiente invoca el metodo que tenemos en nuestra clase
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();
    }
    else {
        show_error();
        //echo "La pagina que buscas no existe 2";
    }
}else {
    show_error();
    //echo "La pagina que buscas no existe 3";
}

require_once 'views/layout/footer.php';