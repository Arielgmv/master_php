<?php

/* 
 * Ejercicio 3. Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones
 * uno para sumar, restar, multiplicar y dividir.
 */
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Número 1</label><br/>
            <input type="number" name="n1"/><br/>
            <label for="n1">Número 2</label><br/>
            <input type="number" name="n2"/><br/>
            <input type="submit" value="Sumar" name="sumar" />
            <input type="submit" value="Restar" name="restar" />
            <input type="submit" value="Multiplicar" name="multiplicar" />
            <input type="submit" value="Dividir" name="dividir" />
        </form>
        <?php ?>
    </body>
</html>