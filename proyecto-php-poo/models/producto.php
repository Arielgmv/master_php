<?php

class Producto{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
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

    public function setCategoria_id($categoria_id){
        $this->categoria_id=$categoria_id;
    }

    public function getCategoria_id(){
        return $this->categoria_id;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;        
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setPrecio($precio){
        $this->precios=$precio;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setStock($stock){
        $this->stock=$stock;
    }

    public function getStock(){
        return $this->stock;
    }

    public function setOferta($oferta){
        $this->oferta=$oferta;
    }

    public function getOferta(){
        return $this->oferta;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setImagen($imagen){
        $this->imagen=$imagen;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
        return $productos;
    }
}