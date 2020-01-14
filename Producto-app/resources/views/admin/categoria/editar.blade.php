<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Categorias</h1>
    
    <form action="{{route('modificar_categoria', 5)}}" method="post">
        @csrf
        @Method('PUT')
        <label for="n">Nombre</label>
        <input type="text" name="nombre" id="n">
        <br>
        <label for="d">Descripcion</label>
        <textarea name="descripcion" id="d"></textarea>
        <input type="submit">
        <input type="reset">
        
    </form>
</body> 
</html>