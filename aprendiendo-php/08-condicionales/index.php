<?php
/*
 * Condicional if
 * IF:
 * if(condicion){
 *  instrucciones
 * }else{
 *  otras instrucciones
 * }
 * 
 * Operadores de comparación
 * == igual
 * === identico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * < mayor que
 * <= menor o igual que
 * >= mayor o igual que
 * ││
 * Operadores lógicos
 * && and
 * ││ or
 * ! not
 * and, or
 */
//Ejemplo 1
$color='azul';
if($color=='rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
echo '<br/>';
//Ejemplo 2
$year=2021;
if($year<=2019){
    echo 'El año es anterior o igual a 2019';
} else {
    echo 'El año es posterior a 2019';
}
echo '<br/>';
//Ejemplo 3
$nombre='Juan Perez';
$ciudad='La Paz';
$continente='Asia';
$edad=32;
$mayoria_edad=18;
if($edad>=$mayoria_edad){
    echo '<h1>'.$nombre.' es mayor de edad</h1>';
    if($continente=='Sudamerica'){
        echo '<h2>Y es de la ciudad de: '.$ciudad;
    } else {
        echo 'No es sudamericano';
    }    
} else {
    echo '<h2>'.$nombre.' no es mayor de edad';
}
echo '<br/>';
//Ejemplo 4
$dia=2;
/*if($dia==1){
    echo 'Es Lunes';
} else {
    if($dia==2){
        echo 'Es Martes';
    } else {
        if($dia==3){
            echo 'Es Miercoles';
        } else {
            if($dia==4){
                echo 'Es Jueves';
            }else{
                if($dia==5){
                    echo 'Es Viernes';
                } else {
                    if($dia==6){
                    echo 'Es Fin de Semana';
                    }
                }
            }
        }
    }
}*/
if($dia==1){
    echo 'Lunes';
}elseif ($dia==2) {
    echo 'Martes';
}elseif ($dia==3){
    echo 'Miercoles';
}elseif ($dia==4){
    echo 'Jueves';
}elseif ($dia==5){
    echo 'Viernes';
} else {
    echo 'Es fin de semana';
}
echo '<br/>';
//Ejemplo 5
$edad1=18;
$edad2=64;
$edad_oficial=17;
if($edad_oficial>=$edad1&&$edad_oficial<=$edad2){
    echo 'Está en edad de trabajar';
}else{
    echo 'No está en edad de trabajar';
}
echo '<br/>';
$pais='USA';
if($pais=='Mexico'||$pais=='España'||$pais=='Bolivia'){
    echo 'En este país se habla español';
} else {
    echo 'No se habla español';
}
echo '<br/>';
//Ejemplo 6 switch
$dia=3;
switch ($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default:
        echo 'Es fin de semana';
}
echo '<br/>';
//Ejemplo 7 go to
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

marca:
echo 'me he saltado 4 echos';
?>
