<?php
//constructor primer metodo que se ejecuta al crear el objeto
//se llama automaticamente al crearlo
//constructor no devuelve datos, se encarga de setear informacion en las 
//propiedades
class Coche{
    //atributos o propiedades (variables)
    
    //public: Podemos acceder a el desde cualquier lugar
    //dentro de la clase actual
    //dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    /*
    protected: podemos acceder desde la clase que los define y desde clases
    que hereden esta clase
    */
    protected $marca;
    /*
    private: unicamente se puede acceder desde esta clase
    */
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    //constructor, metodo magico que se encarga de setear informacion
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color=$color;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->velocidad=$velocidad;
        $this->caballaje=$caballaje;
        $this->plazas=$plazas;
    }
    //Métodos (funciones), acciones que hace el objeto
    public function getColor(){
        //con el operador this accedemos a los atributos de la clase
        //busca en esta clase la propiedad X
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }
    
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function getModelo(){
        return $this->modelo;
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
    public function mostrarInformacion(Coche $miObjeto){
        if (is_object($miObjeto)) {
            $informacion = "<h1>Información del coche</h1>";
            $informacion .= "Color: ".$miObjeto->color."<br/>";
            $informacion .= "Modelo: ".$miObjeto->modelo."<br/>";
            $informacion .= "Velocidad: ".$miObjeto->velocidad."<br/>";
        }else {
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
}
?>