@extends('layouts.admin')

@section('titulo', 'Lista de Categorias')

@section('contenedor')
    <h1>Crear Categorias</h1>
    
    <form action="{{route('guardar_categoria')}}" method="post">
        @csrf
        <label for="n">Nombre</label>
        <input type="text" name="nombre" id="n">
        <br>
        <label for="d">Descripcion</label>
        <textarea name="descripcion" id="d"></textarea>
        <input type="submit">
        <input type="reset">
        
    </form>
@endsection