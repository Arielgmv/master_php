<?php

/* 
 * Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno
 * en función de si el parámetro get counter está a uno o a cero.
 */

session_start();

//$_SESSION['numero']=8;

echo '<pre>';
var_dump($_SESSION['numero']);
echo '</pre>';

if(!isset($_SESSION["numero"])){
    $_SESSION['numero']=0;
}
if(isset($_GET['counter']) && $_GET['counter']==1){
   $_SESSION['numero']++; 
}
if(isset($_GET['counter']) && $_GET['counter']==0){
   $_SESSION['numero']--; 
}
?>
<h1>El valor de la sesión número es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
