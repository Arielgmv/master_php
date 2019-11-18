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
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            
            if ($nombre && $apellidos && $email && $password) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
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
        }else{
            $_SESSION['register']="failed";            
        }
        header("Location:".base_url.'Usuario/registro');
    }
    public function login(){
        if (isset($_POST)) {
            //Identificar el usuario
            //Consulta a la BBDD

            //Crear una sesion
        }
        header("Location:".base_url);
    }
}