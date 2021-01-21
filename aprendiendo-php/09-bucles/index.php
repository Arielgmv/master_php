<?php
/*bucle while
 * Estructura de control que itera o repite la ejecución de una serie de instrucciones
 * tantas veces como sea necesario, en base a una condición
 * while(condicion){
 * bloque de instrucciones
 * otra intruccion
 * }
 */
//Ejemplo 1
$numero=0;
while($numero<=100){
    echo $numero;
    if($numero!=100){
        echo ', ';
    }
    $numero++;
}
echo '<hr/>';
/*Ejemplo 2 (para que ingrese por get colocar
 * ?numero=x->http://127.0.0.1/master_php/aprendiendo-php/09-bucles/index.php?numero=136)*/
if(isset($_GET['numero'])){
    $numero=(int)$_GET['numero'];//se cambia el tipo de dato a int
} else {
    $numero=1;
}
echo('<pre>');
var_dump($numero);
echo('</pre>');
echo '<h1>Tabla de multiplicar del número '.$numero.'</h1>';
$contador=1;
while($contador<=10){
    echo $numero.'X'.$contador.'='.$numero*$contador.'<br/>';
    $contador++;
}
echo '<hr/>';
/*do-while
do{
    bloque de instrucciones
}while(condicion);*/
$edad=25;
$contador=1;
do{
echo 'Tienes acceso al local privado '.$contador.'<br/>';
$contador++;
}while ($edad>=18 && $contador<=10);