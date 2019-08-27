<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Caja Principal-->
<div id="principal">
    <h1>Ultimas entradas</h1>
    <?php
        $entradas=conseguirUltimasEntradas($db);
        //var_dump($entradas);
        if(!empty($entradas)):
            while($entrada=mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <?php //var_dump($entrada);?>
                    <a href="">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'] ?></span>
                        <p><?=substr($entrada['descripcion'], 0, 180).'...'?></p>
                    </a>
                </article>    
    <?php            
            endwhile;
        endif;
    ?>
    
    <div id="ver-todas">
        <a href="entradas.php">Ver todas las entradas</a>
    </div>
</div>
<!--Fin Principal-->

<?php require_once 'includes/pie.php'; ?>