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
            <tr>
                <td>1</td>
                <td>muebles</td>
                <td>muebles de oficina</td>
                <td>
                    <a href="{{ route('ver_categoria', 1) }}" class="btn btn-outline-success btn-xs">ver</a>
                    <a href="{{ route('editar_categoria', 1) }}" class="btn btn-warning btn-xs">editar</a>
                    <form action="{{ route('eliminar_categoria', 1) }}" method="post">
                        @csrf
                        @Method('DELETE')
                        <input type="submit" value="eliminar" class="btn btn-danger btn-xs">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

@endsection