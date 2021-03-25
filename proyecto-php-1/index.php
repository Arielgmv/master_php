<?php require_once './includes/cabecera.php'; ?>

<?php require_once './includes/lateral.php'; ?>

<!--Caja Principal, section / article-->
<div id="principal">
    <h1>Ultimas entradas</h1>
    <?php
        $entradas = conseguirUltimasEntradas($db);
        /*echo ('<pre>');
        var_dump($entradas);        
        echo ('</pre>');*/
        if (!empty($entradas)) :
            while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <a href="">
                    <h2><?=$entrada['titulo']?></h2>
                        <p>
                            <?=$entrada['descripcion']?>
                        </p>
                </a>
            </article>
    <?php            
            endwhile;
        endif;
    ?>   
    
    <div id="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div>
</div>
<!--Fin principal-->

<?php require_once './includes/pie.php'; ?>