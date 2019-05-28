<?php
//creación de carpetas
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
    echo 'Se creó la carpeta';
} else {
    echo 'La carpeta ya se encuentra creada';
}
//borrar directorios
//rmdir('mi_carpeta');
echo '<hr><h1>Contenido Carpeta</h1>';
if($gestor= opendir('./mi_carpeta')){
    while (false!== ($archivo=readdir($gestor))){
        if($archivo!='.'&&$archivo!='..'){
            echo $archivo.'<br>';
        }        
    }
}