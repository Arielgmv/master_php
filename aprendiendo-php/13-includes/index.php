<?php
include './includes/cabecera.php';
//include 'includes/cabecera.php';
?>
        <div>
            <!--Contenido-->
        </div>
        <div>
            <h2>Esta es la página de inicio</h2>
            <p>Texto de prueba de la página de inicio</p>
        </div>
        <?php
            echo '<pre>';
            var_dump($nombre);
            echo '</pre>';
        ?>
<?php
include 'includes/footer.php';
?>
