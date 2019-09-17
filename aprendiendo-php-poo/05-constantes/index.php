<?php
class Usuario{
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }
}
$usuario = new Usuario();
/*echo $usuario::URL_COMPLETA;
echo('<pre>');
var_dump($usuario);
echo('</pre>');*/
echo Usuario::URL_COMPLETA;