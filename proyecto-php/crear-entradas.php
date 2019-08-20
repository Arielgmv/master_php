<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Caja Principal-->
<div id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Anhade nuevas entradas al blog para que los usuarios puedan
        leerlas y disfrutar de nuestro contenido
    </p>
    <br/>
    <form action='guardar-entrada.php' method='POST'>
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre" />

        <input type="submit" value="Guardar" />
    </form>
</div>

<?php require_once 'includes/pie.php'; ?>