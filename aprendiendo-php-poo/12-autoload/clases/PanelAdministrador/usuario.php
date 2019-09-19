<?php
namespace PanelAdministrador;
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre="Ana Garcia";
        $this->email="ana.garcia@gmail.com";
    }
}