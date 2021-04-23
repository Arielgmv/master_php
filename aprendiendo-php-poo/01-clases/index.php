<?php
//poo en php
//definir una clase, molde para crear más objetos de tipo coche
//con características parecidas
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
        //this significa -> busca en esta clase la propiedad X
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
}//fin definicion de la clase
//crear un objeto o instaciar la clase
$coche=new Coche();
/*echo ('<pre>');
var_dump($coche);
die();
echo ('</pre>');*/
//usar los metodos
echo $coche->getVelocidad().'<br/>';
$coche->setColor('Negro');
echo 'El color del coche es: '.$coche->getColor().'<br/>';
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo $coche->getVelocidad().'<br/>';
$coche->frenar();
echo 'La velocidad del coche es: '.$coche->getVelocidad().'<br/>';

$coche2=new Coche();
$coche2->setColor('verde');
$coche2->setModelo('Gallardo');
echo ('<pre>');
var_dump($coche);
var_dump($coche2);
echo ('</pre>');
?>