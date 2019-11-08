<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }
    
    public function setId($id){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setRol($rol){
        $this->rol=$rol;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setImagen($imagen){
        $this->imagen=$imagen;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function save(){
        
        $save = $this->
    }
}

