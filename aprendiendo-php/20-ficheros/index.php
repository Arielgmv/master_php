<?php
/*
//Abrir archivo
$archivo= fopen('fichero_texto.txt', 'a+');
//Leer archivo
while(!feof($archivo)){
$contenido= fgets($archivo);
echo $contenido.'<br/>';
}
//Escribir
fwrite($archivo, 'Soy una línea de texto');

//Cerrar archivo
fclose($archivo);

//Copiar
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');
//Renombrar
//rename('archivo_copiado.txt', 'copia.txt');

//Eliminar
//unlink('copia.txt') or die('Error al borrar');
*/
if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe';
} else {
    echo 'El archivo no existe';
}