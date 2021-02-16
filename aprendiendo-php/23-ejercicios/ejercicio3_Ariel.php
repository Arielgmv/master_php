<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <!--Ejercicio 3. Hacer una interfaz de usuario (formulario) con dos inputs y
    4 botones, uno para sumar, restar, dividir y multiplicar-->
    <form method="POST" action="./ejercicio3_Ariel.php">
        <label for="numero_uno">Ingrese el primer número</label>
        <input type="number" name="numero_uno" required="required" pattern="[0-9]+"><br>
        <label for="numero_dos">Ingrese el segundo número</label>
        <input type="number" name="numero_dos" required="required" pattern="[0-9]+"><br>
        <label for="operacion">Ingrese la operación a realizar:</label><br>
        <input type="radio" name="operacion" value="suma">Suma<br>
        <input type="radio" name="operacion" value="resta">Resta<br>
        <input type="radio" name="operacion" value="multiplicacion">Multiplicación<br>
        <input type="radio" name="operacion" value="division">División<br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
echo ('<pre>');
var_dump($_POST);
var_dump($_POST['numero_uno']);
var_dump($_POST['numero_dos']);
var_dump($_POST['operacion']);
echo ('</pre>');
$numero_uno=$_POST['numero_uno'];
$numero_dos=$_POST['numero_dos'];
$operacion=$_POST['operacion'];

switch ($operacion) {
    case 'suma':
        $suma=$numero_uno+$numero_dos;
        echo '<p>La '.$operacion.' de '.$numero_uno.' mas '.$numero_dos.' es: '.$suma.'</p>';
        break;
    case 'resta':
        $resta=$numero_uno-$numero_dos;
        echo '<p>La '.$operacion.' de '.$numero_uno.' menos '.$numero_dos.' es: '.$resta.'</p>';
        break;
    case 'multiplicacion':
        $multiplicacion=$numero_uno*$numero_dos;
        echo '<p>La '.$operacion.' de '.$numero_uno.' por '.$numero_dos.' es: '.$multiplicacion.'</p>';
        break;
    case 'division':
        $division=$numero_uno/$numero_dos;
        echo '<p>La '.$operacion.' de '.$numero_uno.' entre '.$numero_dos.' es: '.$division.'</p>';
        break;
    default:
        echo '<p>No es ninguna operación</p>';
        break;
}



?>
