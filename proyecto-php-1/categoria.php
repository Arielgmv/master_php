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
    var_dump($categoria_actual);    
    ?>
    <h1>Entradas de <?=$categoria_actual['nombre']?></h1>
    
    <?php
        $entradas = conseguirEntradas($db);
        /*echo ('<pre>');
        var_dump($entradas);        
        echo ('</pre>');*/
        if (!empty($entradas)) :
            while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <?php 
                /*echo ('<pre>');
                var_dump($entrada); 
                echo ('</pre>');*/
                ?>                
                <a href="">
                    <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha "><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'], 0, 180)."..." ?>
                        </p>
                </a>
            </article>
    <?php            
            endwhile;
        endif;
    ?>
</div>
<!--Fin principal-->

<?php require_once './includes/pie.php'; ?>