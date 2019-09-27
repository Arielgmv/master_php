<?php
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Ariel Muñoz";
        $this->email = "ariel.munoz.villegas@gmail.com";
        echo "Creando el objeto <br/>";
    }

    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }
    
    public function __destruct(){
        echo "<br/>Destruyendo el objeto";
    }
}

$usuario = new Usuario();
//echo $usuario->email;
echo $usuario;
/*for ($i=0; $i <= 200 ; $i++) { 
    echo $i."<br/>";
}*/
