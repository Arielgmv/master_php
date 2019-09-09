<?php
    if (!isset($_POST['busqueda'])) {
        header("Location: index.php");
    }
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Caja Principal-->
<div id="principal">
    <?php
    //var_dump($categoria_actual);
    //die();
    ?>
    <h1>Busqueda: <?=$_POST['busqueda']?></h1>
    <?php
        $entradas=conseguirEntradas($db, null, $_POST['busqueda']);
        //var_dump($entradas);
        if(!empty($entradas)):
            while($entrada=mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <?php //var_dump($entrada);?>
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'] ?></span>
                        <p><?=substr($entrada['descripcion'], 0, 180).'...'?></p>
                    </a>
                </article>    
    <?php            
            endwhile;
        else:
    ?>
    <div class="alerta">No hay entradas en esta categoria</div>
    <?php endif; ?>
</div>
<!--Fin Principal-->

<?php require_once 'includes/pie.php'; ?>