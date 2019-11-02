<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = '/var/www/html/master_php/aprendiendo-librerias-php/manipular_imagenes/fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

//Redimensionar
$thumb->resize(250, 250);

//Recortar
$thumb->cropFromCenter(200, 100);

$thumb->show();
$thumb->save($guardar_en);