<?php
//require es más estricto, include se  sigue ejecutando
//con require no
    require 'includes/cabecera.php';
?>
        <div>
            <!--Contenido-->
        </div>
        <div>
            <h2>Esta es la página de Sobre mi</h2>
            <p>Texto de prueba de la página de Sobre mi</p>
        </div>
<?php
    //más recomendado
    require_once 'includes/footer.php';
?>
