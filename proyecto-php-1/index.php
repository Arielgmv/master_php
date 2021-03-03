<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!--esto permite meter ñ, tildes y símbolos raros-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
    <!--Cabecera-->
    <header id="cabecera">
        <!--Logo-->
        <div id="logo">
            <a href="./index.php">Blog de Videojuegos</a>
        </div>
        <!--Menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="./index.php">Inicio</a>
                </li>
                <li>
                    <a href="./index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="./index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="./index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="./index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="./index.php">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="./index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
        <!--Barra Lateral-->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>
        <!--Caja Principal, section / article-->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    labore et dolore magna aliqua. Nunc congue nisi vitae suscipit tellus. Tellus id interdum velit 
                    laoreet. Sit amet consectetur adipiscing elit. Commodo sed egestas egestas fringilla phasellus 
                    faucibus scelerisque eleifend donec. Proin libero nunc consequat interdum varius. Diam sit amet 
                    nisl suscipit adipiscing bibendum. Venenatis lectus magna fringilla urna porttitor rhoncus. Amet 
                    porttitor eget dolor morbi. Ut ornare lectus sit amet est placerat in. Mattis vulputate enim nulla 
                    aliquet porttitor. Feugiat vivamus at augue eget arcu dictum. A pellentesque sit amet porttitor eget 
                    dolor morbi non. Nunc sed blandit libero volutpat sed. Montes nascetur ridiculus mus mauris vitae ultricies 
                    leo integer. Leo a diam sollicitudin tempor. Magnis dis parturient montes nascetur ridiculus. Mauris cursus 
                    mattis molestie a. Aliquet eget sit amet tellus cras adipiscing enim eu turpis.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    labore et dolore magna aliqua. Nunc congue nisi vitae suscipit tellus. Tellus id interdum velit 
                    laoreet. Sit amet consectetur adipiscing elit. Commodo sed egestas egestas fringilla phasellus 
                    faucibus scelerisque eleifend donec. Proin libero nunc consequat interdum varius. Diam sit amet 
                    nisl suscipit adipiscing bibendum. Venenatis lectus magna fringilla urna porttitor rhoncus. Amet 
                    porttitor eget dolor morbi. Ut ornare lectus sit amet est placerat in. Mattis vulputate enim nulla 
                    aliquet porttitor. Feugiat vivamus at augue eget arcu dictum. A pellentesque sit amet porttitor eget 
                    dolor morbi non. Nunc sed blandit libero volutpat sed. Montes nascetur ridiculus mus mauris vitae ultricies 
                    leo integer. Leo a diam sollicitudin tempor. Magnis dis parturient montes nascetur ridiculus. Mauris cursus 
                    mattis molestie a. Aliquet eget sit amet tellus cras adipiscing enim eu turpis.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    labore et dolore magna aliqua. Nunc congue nisi vitae suscipit tellus. Tellus id interdum velit 
                    laoreet. Sit amet consectetur adipiscing elit. Commodo sed egestas egestas fringilla phasellus 
                    faucibus scelerisque eleifend donec. Proin libero nunc consequat interdum varius. Diam sit amet 
                    nisl suscipit adipiscing bibendum. Venenatis lectus magna fringilla urna porttitor rhoncus. Amet 
                    porttitor eget dolor morbi. Ut ornare lectus sit amet est placerat in. Mattis vulputate enim nulla 
                    aliquet porttitor. Feugiat vivamus at augue eget arcu dictum. A pellentesque sit amet porttitor eget 
                    dolor morbi non. Nunc sed blandit libero volutpat sed. Montes nascetur ridiculus mus mauris vitae ultricies 
                    leo integer. Leo a diam sollicitudin tempor. Magnis dis parturient montes nascetur ridiculus. Mauris cursus 
                    mattis molestie a. Aliquet eget sit amet tellus cras adipiscing enim eu turpis.
                </p>
            </article>
        </div>
    </div>
    <!--Pie de Página-->
    <footer id="pie">
        <p>Desarrollado por Ariel Muñoz &copy; 2021</p>
    </footer>
</body>

</html>