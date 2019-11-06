<?php
class usuarioController{
    public function index(){
        echo "Controlador Error, Acción Index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if (isset($_POST)) {
            var_dump($_POST);
        }
    }
}