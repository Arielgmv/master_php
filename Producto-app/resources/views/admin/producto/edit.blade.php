@extends('layouts.admin')

@section('titulo', 'Editar Productos')

@section('contenedor')
    <h1>Crear Productos</h1>
    
    <form action="{{route('modificar_producto', 5)}}" method="post">
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
@endsection