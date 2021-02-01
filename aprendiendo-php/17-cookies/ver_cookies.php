<?php
/* 
 * Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal,
 * es una array asociativo.
 */
if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
    echo '<pre>';
    var_dump($_COOKIE['micookie']);
    echo '</pre>';
} else {
    echo 'No existe la cookie<br/>';
}

if(isset($_COOKIE['oneyear'])){
    echo '<h1>'.$_COOKIE['oneyear'].'</h1>';
    echo '<pre>';
    var_dump($_COOKIE['oneyear']);
    echo '</pre>';
} else {
    echo 'No existe la cookie<br/>';
}
?>
<a href="crear_cookies.php">Crear mis galletas</a>
<br/>
<a href="borrar_cookies.php">Borrar mis galletas</a>
