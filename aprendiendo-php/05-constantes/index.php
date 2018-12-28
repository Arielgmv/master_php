<?php
// constantes
// Es un contenedor de información que no puede variar
define('nombre', 'Ariel Muñoz');
define('web', 'atuxempleos.com');
echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';
// variables
$web='www.atuxempleos.com';
$web='www.atuxempleos.com/blog';
echo '<h1>'.$web.'</h1>';
//constantes predefinidas
echo PHP_VERSION.'<br />';
echo PHP_OS.'<br />';
echo __FILE__.'<br />';
function mundoMar(){
    //indica el nombre de la función que lo contiene
    echo __FUNCTION__;
}
mundoMar();
?>