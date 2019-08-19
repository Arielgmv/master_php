<?php
//constructor primer metodo que se ejecuta al crear el objeto
//se llama automaticamente al crearlo
//constructor no devuelve datos, se encarga de setear informacion en las 
//propiedades
class Coche{
    //atributos o propiedades (variables)
    public $color='Rojo';
    public $marca='Ferrari';
    public $modelo='Aventador';
    public $velocidad=300;
    public $caballaje=500;
    public $plazas=2;

    //Métodos (funciones), acciones que hace el objeto
    public function getColor(){
        //con el operador this accedemos a los atributos de la clase
        //busca en esta clase la propiedad X
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }
}
?>