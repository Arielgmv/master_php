<?php
if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo 'El título es: <h1>'.$_POST['titulo'].'</h1><br/>';
    echo 'Y la descripción es: '.$_POST['descripcion'];
}
