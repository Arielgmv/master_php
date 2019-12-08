<?php

class Pedido{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;

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

    public function setUsuario_id($usuario_id){
        $this->usuario_id=$usuario_id;
    }

    public function getUsuario_id(){
        return $this->usuario_id;
    }

    public function setProvincia($provincia){
        $this->provincia = $this->db->real_escape_string($provincia);        
    }

    public function getProvincia(){
        return $this->provincia;
    }

    public function setLocalidad($localidad){
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    public function getLocalidad(){
        return $this->localidad;
    }

    public function setDireccion($direccion){
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setCoste($coste){
        $this->coste = $this->db->real_escape_string($coste);
    }

    public function getCoste(){
        return $this->coste;
    }

    public function setEstado($estado){
        $this->estado = $this->db->real_escape_string($estado);
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setHora($hora){
        $this->hora=$hora;
    }

    public function getHora(){
        return $this->hora;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
        return $productos;
    }

    public function getAllCategory(){
        $sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
                . "INNER JOIN categorias c ON c.id = p.categoria_id "
                . "WHERE p.categoria_id = {$this->getCategoria_id()} "
                . "ORDER BY id DESC";
        $productos = $this->db->query($sql);
        return $productos;
    }
    
    public function getRandom($limit){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
        return $productos;
    }

    public function getOne(){
        $producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()};");
        return $producto->fetch_object();
    }

    public function save(){
        $sql = "INSERT INTO productos VALUES(NULL, '{$this->getCategoria_id()}','{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}')";
        $save = $this->db->query($sql);

        /*echo $this->db->error;
        die();*/

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function edit(){
        $sql = "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()} ";
        
        if($this->getImagen() != null){
            $sql .= ", imagen='{$this->getImagen()}'";
        }

        $sql .= " WHERE id={$this->id};";
        
        $save = $this->db->query($sql);

        /*echo $this->db->error;
        die();*/

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }    
    
    
    public function delete(){
        $sql = "DELETE FROM productos WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }
}