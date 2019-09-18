<?php
//permite definir una serie de métodos para compartir entre diferentes clases
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}
class Coche{
    public $nombre;
    public $marca;
    use Utilidades;
}
class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
}
class Videojuego{
    public $nombre;
    public $anio;
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Compass";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Ariel";
$persona->mostrarNombre();

$videojuego = new Videojuego();
$videojuego->nombre = "Counter Strike";
$videojuego->mostrarNombre();

//var_dump($coche);



