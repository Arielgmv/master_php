<?php
require_once 'models/usuario.php';
class usuarioController{
    public function index(){
        echo "Controlador Usuarios, Acción Index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $save = $usuario->save();
            /*echo('<pre>');
            var_dump($usuario);
            echo('</pre>');*/
            if ($save) {
                $_SESSION['register']="complete";
            }else{
                $_SESSION['register']="failed";
            }
        }else{
            $_SESSION['register']="failed";            
        }
        header("Location:".base_url.'Usuario/registro');
    }
}