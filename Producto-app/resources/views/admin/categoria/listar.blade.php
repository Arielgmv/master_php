@extends('layouts.admin')

@section('titulo', 'Lista de Categorias')

@section('contenedor')
    
    <a href="{{route('crear_categoria')}}" class="btn btn-primary">Nueva Categoria</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
        @foreach($categorias as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->nombre }}</td>
                <td>{{ $cat->descripcion }}</td>
                <td>
                    <a href="{{ route('ver_categoria', $cat->id) }}" class="btn btn-outline-success btn-xs">ver</a>
                    <a href="{{ route('editar_categoria', $cat->id) }}" class="btn btn-warning btn-xs">editar</a>
                    <form action="{{ route('eliminar_categoria', $cat->id) }}" method="post">
                        @csrf
                        @Method('DELETE')
                        <input type="submit" value="eliminar" class="btn btn-danger btn-xs">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categorias->links() }}
@endsection