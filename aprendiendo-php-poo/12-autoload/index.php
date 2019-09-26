<?php
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
//require_once 'autoload.php';

/*$categoria=new Categoria();
echo $categoria->nombre;*/
//Espacios de nombres y paquetes

/*use Misclases\Usuario;
use Misclases\Categoria;
use Misclases\Entrada;*/

use Misclases\Usuario, Misclases\Categoria, Misclases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario=new Usuario();
        $this->categoria=new Categoria();
        $this->entrada=new Entrada();
    }
}
//Objeto principal
$principal = new Principal();
echo('<pre>');
//var_dump($principal->usuario);
var_dump(get_class_methods($principal));
echo('</pre>');

$usuario = new UsuarioAdmin();
echo('<pre>');
var_dump($usuario);
echo('</pre>');

//comprobar si existe una clase
$clase = class_exists('Misclases\Usuario');
if ($clase) {
    echo '<h1>La clase si existe</h1>';
}else {
    echo '<h1>La clase no si existe</h1>';
}