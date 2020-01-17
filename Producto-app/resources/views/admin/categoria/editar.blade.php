@extends('layouts.admin')

@section('titulo', 'Editar Categorias')

@section('contenedor')
    <h1>Crear Categorias</h1>
    
    <form action="{{route('modificar_categoria', $categoria->id)}}" method="post">
        @csrf
        @Method('PUT')
        <label for="n">Nombre</label>
        <input type="text" name="nombre" id="n" value="{{ $categoria->nombre }}">
        <br>
        <label for="d">Descripcion</label>
        <textarea name="descripcion" id="d">{{ $categoria->descripcion }}</textarea>
        <input type="submit">
        <input type="reset">
        
    </form>
@endsection