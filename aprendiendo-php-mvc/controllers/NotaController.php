<?php
class NotaController{
    public function listar(){
        //modelo
        require_once 'models/nota.php';

        //Logica accion del controlador
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola Mundo PHP MVC");

        //Vista
        require_once 'views/nota/listar.php';
    }
    public function crear(){

    }
    public function borrar(){
        
    }
}