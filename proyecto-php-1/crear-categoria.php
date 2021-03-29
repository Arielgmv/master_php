<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>
<!--Caja Principal-->
<div id="principal">
    <h1>Crear categorías</h1>
    <p>
        Añade nuevas categorías al blog para que los usuarios puedan
        usarlas al crear sus entradas
     </p>
     <br>
    <!--Mostrar errores-->
    <?php if(isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito"> 
            <?=$_SESSION['completado']?>
        </div>
    <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error"> 
            <?=$_SESSION['errores']['general']?>
        </div>
    <?php endif; ?>

    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la categoría</label>
        <input type="text" name="nombre">

        <input type="submit" value="Guardar">
    </form>
    
</div>
<!--Fin principal-->

<?php require_once './includes/pie.php'; ?>