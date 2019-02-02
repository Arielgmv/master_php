<?php
//Debuggear
$nombre='Ariel Muñoz';
var_dump($nombre);

//fechas
echo '<br/>';
echo date('d-m-Y');
echo '<br/>';
echo time();

//Matemáticas
echo '<br/>';
echo 'Raíz Cuadrada de 25: '. sqrt(25);
echo '<br/>';
echo 'Número aleatorio: '. rand();
echo '<br/>';
echo 'Número aleatorio entre 10 y 40: '. rand(10, 40);
echo '<br/>';
echo 'Número pi: '. pi();
echo '<br/>';
echo 'Redondeo sin decimales: '. round(7.5687464);
echo '<br/>';
echo 'Redondeo con dos decimales: '. round(7.5687464, 2);
//más funciones generales
echo '<br/>';
echo gettype($nombre);
echo '<br/>';

//detectar tipado
if(is_string($nombre)){
    echo 'Esa variable es un string';
}
echo '<br/>';
if(!is_float($nombre)){
    echo 'Esa variable no es un número con decimales';
}
echo '<br/>';

//comprobar si existe una variable
if(isset($nombre)){
    echo 'La variable existe';
} else {
    echo 'La variable no existe';
}
echo '<br/>';
$frase='    mi contenido    ';
var_dump($frase);
echo '<br/>';

//limpiar espacios
var_dump(trim($frase));
echo '<br/>';

//eliminar variables/indice de array
$year=2020;
echo $year;
unset($year);
echo $year;

//comprobar variable vacia
echo '<br/>';
$texto='';
if(empty($texto)){
    echo 'La variable texto está vacia';
} else {
    echo 'La variable tiene contenido';
}

//contar caracteres de una cadena de texto
echo '<br/>';
$cadena='12345';
echo strlen($cadena);

//Encontrar caracter
echo '<br/>';
$frase='La vida es bella';
echo strpos($frase, 'vida');

//Reemplazar palabras de un string
echo '<br/>';
$frase1= str_replace('vida', 'felicidad', $frase);
echo $frase1;

//mayúsculas y minusculas
echo '<br/>';
echo strtolower($frase);
echo '<br/>';
echo strtoupper($frase);