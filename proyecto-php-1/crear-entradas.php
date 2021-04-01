<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>
<!--Caja Principal-->
<div id="principal">
    <h1>Crear entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuarios puedan
        leerlas y disfrutar de nuestro contenido
     </p>
     <br>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo">

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion">

        <label for="categoria">Categoría:</label>
        <select name="categoria">
        
        </select>
        
        <input type="submit" value="Guardar">
    </form>
    
</div>
<!--Fin principal-->

<?php require_once './includes/pie.php'; ?>