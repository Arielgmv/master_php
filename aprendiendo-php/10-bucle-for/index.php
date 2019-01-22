<?php
/*
for (variable contador; condición; actualizando contador){
    //bloque de instrucciones
}
*/
$resultado=0;
for($i=0; $i<=100; $i++){
    $resultado=$resultado+$i;
    echo $resultado.', ';
}
echo '<h1>El resultado es: '.$resultado.'</h1>';
echo '<hr/>';
//ejemplo tabla de multiplicar
if(isset($_GET['numero'])){
    $numero=(int)$_GET['numero'];//se cambia el tipo de dato a int
} else {
    $numero=1;
}
echo '<h1>Tabla de multiplicar del número '.$numero.'</h1>';
for($contador=1; $contador<=10; $contador++){
    if($numero == 45){
        echo 'No se pueden mostrar estas operaciones prohibidas';
        break;
    }
    echo $numero.'X'.$contador.'='.$numero*$contador.'<br/>';
}