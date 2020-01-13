<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function (){
    echo "Hola desde la ruta funcion cerrada o closure";
});

Route::get('/hola2', function (){
    return "Hola desde la ruta funcion cerrada o closure 2";
});

Route::get('/usuario', function (){
    return ['nombre'=>'juan', 'edad'=>38];
});

Route::get('/usuario/{nombre}/{edad}', function($n, $e){
    return ['nombre'=>$n, 'edad'=>$e];
});

Route::get('/contacto', function () {
    return view('contacto');
});

//Rutas Categoria
Route::get('/categoria', 'CategoriaController@listar')->name('lista_categorias');
Route::get('/categoria/crear', 'CategoriaController@crear')->name('crear_categoria');
Route::get('/categoria/{id}', 'CategoriaController@ver')->name('ver_categoria');
Route::get('/categoria/{id}/editar', 'CategoriaController@editar')->name('editar_categoria');

Route::resource('/proveedor', 'ProveedorController');

//Rutas Producto
Route::get('/producto', 'ProductoController@index')->name('lista_producto');
Route::get('/producto/create', 'ProductoController@create')->name('crear_producto');
Route::get('/producto/{id}', 'ProductoController@show')->name('ver_producto');
Route::get('/producto/{id}/edit', 'ProductoController@edit')->name('editar_producto');