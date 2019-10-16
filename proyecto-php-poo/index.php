<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <!--Cabecera-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>
        <!--Menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>    
                <li>
                    <a href="#">Categoria 2</a>
                </li>    
                <li>
                    <a href="#">Categoria 3</a>
                </li>    
                <li>
                    <a href="#">Categoria 4</a>
                </li>    
                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <!--Barra Lateral-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />
                    </form>

                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorias</a>
                </div>
            </aside>    
            
            <!--Contenido Central-->
            <div id="central">
                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="">Comprar</a>
                </div>
            </div>
        </div>
        <!--Pie de página-->
        <footer id="footer">
            <p>Desarrollado por Ariel Muñoz &copy; <?=date('Y')?></p>
        </footer>
    </body>
</html>