<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre" required="required" placeholder="Ingresa tu nombre"/></p>
            
            <label for="apellido">Apellido:</label>            
            <p><input type="text" name="apellido" autofocus="autofocus" maxlength="10" minlength="5" pattern="[A-Z ]+" /></p>            
            
            <label for="boton">Botón</label>            
            <p><input type="button" name="boton" value="Click Aquí"/></p>
            
            <label for="sexo">Sexo:</label>            
            <p>
                Hombre: <input type="checkbox" name="sexo" value="hombre"/><br/>
                Mujer: <input type="checkbox" name="sexo" value="mujer" checked="checked"/>
            </p>
            
            <label for="color">Color:</label>            
            <p><input type="color" name="color" /></p>
            
            <label for="fecha">Fecha:</label>            
            <p><input type="date" name="fecha" /></p>
            
            <label for="correo">Email:</label>            
            <p><input type="email" name="correo" /></p>
            
            <label for="archivo">Archivo:</label>            
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            
            <label for="apellido">Apellido:</label>            
            <p><input type="hidden" name="apellido" /></p>
            
            <label for="numero">Número:</label>            
            <p><input type="number" name="numero" /></p>
            
            <label for="pass">Contraseña:</label>            
            <p><input type="password" name="pass" /></p>
            
            <label for="continente">Continente:</label>            
            <p>
                América del Sur: <input type="radio" name="continente" value="America del Sur"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
            </p>
            
            <label for="url">Página web:</label>            
            <p><input type="url" name="url" /></p>
            
            <textarea></textarea><br/>
            
            Películas:
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="El señor de los Anillos">El señor de los Anillos</option>
                <option value="Hobbit">Hobbit</option>
            </select>
            <br />
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>