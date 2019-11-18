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
        $this->nombre=$this->db->real_escape_string($nombre);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos=$this->db->real_escape_string($apellidos);
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setEmail($email){
        $this->email=$this->db->real_escape_string($email);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password=password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
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
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', null)";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function login($email, $password){
        //Comprobar si existe el usuario
        $sql = "SELECT id, password FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);

        if ($login && $login->num_rows() == 1) {
            # code...
        }
    }
}

