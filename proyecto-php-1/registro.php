<?php
if (isset($_POST['submit'])) {
    //Recoger los valores del formulario de registro
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    } else {
        $nombre = false;
    }    
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false; /*operador ternario*/
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Validar los datos antes de guardar en la BBDD
} else {
    # code...
}


echo '<pre>';
var_dump($_POST);
echo '</pre>';