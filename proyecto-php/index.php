<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Blog de videojuegos</title>
    </head>
    <body>
        <!--Cabecera-->
        <header id='header'>
            <!--Logo-->
            <div id='logo'>
                <a href='index.php'>
                    Blog de Videojuegos
                </a>
            </div>
            <!--Menu-->
            <nav id='nav'>
                <ul>
                    <li>
                        <a href='index.php'>Inicio</a>
                    </li>
                    <li>
                        <a href='index.php'>Categoria 1</a>
                    </li>
                    <li>
                        <a href='index.php'>Categoria 2</a>
                    </li>
                    <li>
                        <a href='index.php'>Categoria 3</a>
                    </li>
                    <li>
                        <a href='index.php'>Categoria 4</a>
                    </li>
                    <li>
                        <a href='index.php'>Sobre Nosotros</a>
                    </li>
                    <li>
                        <a href='index.php'>Contacto</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id='container'>      
            <!--Barra Lateral-->
            <aside id='sidebar'>
                <div id='login'>
                    <h3>Identificate</h3>
                    <form action='login.php' method='POST'>
                        <label for='email'>Email</label>
                        <input type='text' name='email'/>
                    </form>
                </div>
            </aside>
            <!--Caja Principal-->
        </div>
        <!--Pie de Pagina-->
    </body>
</html>