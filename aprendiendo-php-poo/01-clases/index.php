<?php
//poo en php
//definir una clase, molde para crear más objetos de tipo coche
//con características parecidas
class Coche{
    //atributos o propiedades (variables)
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    //Métodos (funciones), acciones que hace el objeto
    public function getColor(){
        //con el operador this accedemos a los atributos de la clase
        //busca en esta clase la propiedad X
        return $this->color;
    }
}
?>