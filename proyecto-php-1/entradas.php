<?php require_once './includes/cabecera.php'; ?>

<?php require_once './includes/lateral.php'; ?>

<!--Caja Principal, section / article-->
<div id="principal">
    <h1>Todas las entradas</h1>
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