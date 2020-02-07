<?php

/* 
 * Funciones: conjunto de instrucciones agrupadas bajo un nombre concreto
 * y que pueden reutilizarse solamente invocando a la función tantas veces como queramos
 * function nombreDeMiFuncion(){
 *  //Bloque / conjunto de instrucciones
 * }
 * nombreDeMiFuncion($mi_parametro)
 *  */
//ejemplo 1
function  muestraNombres(){
    echo 'Ariel Muñoz <br/>';
    echo 'Epifanio Muñoz <br/>';
    echo 'Carlos Muñoz <br/>';
    echo 'Teodoro Muñoz <br/>';
    echo '<hr/>';
}
//invocar funcion
muestraNombres();
muestraNombres();
//ejemplo 2
//http://127.0.0.1/master_php/aprendiendo-php/12-funciones/index.php?numero=98
function tabla($numero){
    echo '<h3>Tabla de multiplicar del número '.$numero.'</h3>';
    for($i=1; $i<=10; $i++){
        $operacion=$numero*$i;
        echo $numero.'X'.$i.'='.$operacion.'<br/>';
    }
}
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
    tabla(3);
    tabla(20);
    tabla(5);
} else {
    echo 'No hay número para sacar la tabla';
}
//ejemplo 3
echo '<h3>Calculadora</h3>';
function calculadora($numero1, $numero2, $negrita=false){
    //conjunto de instrucciones a realizar
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    if($negrita==true){
        echo '<h1>';
    }    
    echo 'Suma = '.$suma.'<br/>';
    echo 'Resta = '.$resta.'<br/>';
    echo 'Multiplicacion = '.$multiplicacion.'<br/>';
    echo 'División = '.$division.'<br/>';
    if($negrita==true){
        echo '</h1>';
    }
    echo '<hr/>';
}
calculadora(2, 1, true);
calculadora(43, 34);
//ejemplo 4
echo '<h3>Return</h3>';
function getNombre ($nombre){
    $texto='El nombre es: '.$nombre.'<br/>';
    return $texto;
}
function getApellidos($apellidos){
    $texto='Los apellidos son: '.$apellidos.'<br/>';
    return $texto;
}
function devuelveElNombre($nombre, $apellidos){
    $texto= getNombre($nombre)
            .'<br/>'.
            getApellidos($apellidos);
    return $texto;
}
echo getNombre('Ana Maria');
echo getApellidos('Garcia Limchs');
echo devuelveElNombre('Ariel', 'Muñoz Villegas');