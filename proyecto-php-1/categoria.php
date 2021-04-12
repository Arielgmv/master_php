<?php require_once './includes/conexion.php'; ?>
<?php require_once './includes/helpers.php'; ?>
<?php
    $categoria_actual = conseguirCategoria($db, $_GET['id']);
    /*var_dump($categoria);
    die();*/
    if (!isset($categoria_actual['id'])) {
        header("Location: index.php");
    }
?>

<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>

<!--Caja Principal, section / article-->
<div id="principal">    
    <?php
    //var_dump($categoria_actual);    
    ?>
    <h1>Entradas de <?=$categoria_actual['nombre']?></h1>
    
    <?php
        $entradas = conseguirEntradas($db, null, $_GET['id']);
        /*echo ('<pre>');
        var_dump($_GET['id']);
        var_dump($entradas); 
        echo ('</pre>');*/
        if (!empty($entradas) && mysqli_num_rows($entradas) >=1) :
            while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <?php 
                /*echo ('<pre>');
                var_dump($entrada); 
                echo ('</pre>');*/
                ?>                
                <a href="entrada.php?id=<?=$entrada['id']?>">
                    <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'], 0, 180)."..." ?>
                        </p>
                </a>
            </article>
    <?php            
            endwhile;
        else:
    ?>
    <div class="alerta">No hay entradas en esta categoría</div>
    <?php endif; ?>
</div>
<!--Fin principal-->

<?php require_once './includes/pie.php'; ?>