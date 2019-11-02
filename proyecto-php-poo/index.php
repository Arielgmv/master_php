<h1>Bienvenido a mi web con MVC</h1>
<?php

//use Misclases\Usuario;

//mostrar errores en PHP: https://stackify.com/display-php-errors/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'autoload.php';

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
    //var_dump($nombre_controlador);
}else {
    echo "La pagina que buscas no existe 1";
    exit();
}

if (class_exists($nombre_controlador)) {
    
    $controlador = new $nombre_controlador();

    //$controlador->MostrarTodos();
    //$controlador->crear();
    //$_GET['action'] es variable
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        //se llama con http://127.0.0.1/master_php/aprendiendo-php-mvc/?action=MostrarTodos
        //http://127.0.0.1/master_php/aprendiendo-php-mvc/?action=crear
        //haciendo lo siguiente invoca el metodo que tenemos en nuestra clase
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo "La pagina que buscas no existe 2";
    }
}else {
    echo "La pagina que buscas no existe 3";
}

//llamamos con http://127.0.0.1/master_php/aprendiendo-php-mvc/?controller=UsuarioController&action=crear
//http://127.0.0.1/master_php/aprendiendo-php-mvc/?controller=UsuarioController&action=mostrarTodos
//http://127.0.0.1/master_php/aprendiendo-php-mvc/?=UsuarioController&action=mostrarTodos

//http://127.0.0.1/master_php/aprendiendo-php-mvc/?controller=Usuario&action=crear
//http://127.0.0.1/master_php/aprendiendo-php-mvc/?controller=Nota&action=listar

