<?php
if(isset($_POST['submit'])){
    /*if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
    }else{
        $nombre=false;
    }*/   
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email=isset($_POST['email']) ? $_POST['email'] : false;
    $password=isset($_POST['password']) ? $_POST['password'] : false;
    echo $nombre.'<br>';
    echo $apellidos.'<br>';
    echo $email.'<br>';
    echo $password.'<br>';
}
