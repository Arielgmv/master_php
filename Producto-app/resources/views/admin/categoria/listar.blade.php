<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Categorias</h1>
    <a href="{{route('crear_categoria')}}">Nueva Categoria</a>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>muebles</td>
                <td>muebles de oficina</td>
                <td>
                    <a href="{{ route('ver_categoria', 1) }}">ver</a>
                    <a href="{{ route('editar_categoria', 1) }}">editar</a>
                    <form action="{{ route('eliminar_categoria', 1) }}" method="post">
                        @csrf
                        @Method('DELETE')
                        <input type="submit" value="eliminar">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>