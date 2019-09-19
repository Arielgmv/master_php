<?php
namespace Misclases;
class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct(){
        $this->nombre="Accion";
        $this->descripcion="Categoria enfocada a la review de videojuegos de accion";
    }
}