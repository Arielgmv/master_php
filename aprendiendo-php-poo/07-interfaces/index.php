<?php
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}
class iMac implements Ordenador{
    private $modelo;
    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    function getModelo(){
        return $this->modelo;
    }

    public function encender(){
        return "Lo que sea";
    }
    public function apagar(){
        return "Lo que sea";;
    }
    public function reiniciar(){
        return "Lo que sea";;
    }
    public function desfragmentar(){
        return "Lo que sea";;
    }
    public function detectarUSB(){
        return "Lo que sea";;
    }  
}

$maquintosch = new iMac();
$maquintosch->setModelo("Macbook Pro 2019");
echo $maquintosch->getModelo();
echo('<pre>');
var_dump($maquintosch);
echo('</pre>');
