<?php
require_once 'ModeloBase.php';
class Usuario extends ModeloBase{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    //con esto tengo acceso a la propiedad db
    public function __construct(){
        parent::__construct();
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
}