<?php

/* 
 * Ejercicio 5. Crear un array con el contenido de la tabla:
 * Acción   Aventura    Deportes
 * GTA      ASSASINS    Fifa
 * COD      Crash       PES
 * PUG      POP         MotoGP 19
 * 
 * Cada fila debe ir es un fichero separado (includes)
 */
$tabla=array(
    'Accion'=>array('GTA', 'Call of Duty', 'PUG'),
    'Aventura'=>array('ASSASINS', 'Crash Bandicoot', 'Prince of Persia'),
    'Deportes'=>array('Fifa', 'PES', 'MotoGP 19')
);
echo '<pre>';
var_dump($tabla);
echo '</pre>';
echo '<pre>';
var_dump(array_keys($tabla));
echo '</pre>';
$categorias= array_keys($tabla);
?>
<table border="2">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>
</table>