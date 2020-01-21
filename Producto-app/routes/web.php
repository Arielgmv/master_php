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
Route::get('/categoria', 'CategoriaController@listar')->name('lista_categorias')->middleware('auth');
Route::get('/categoria/crear', 'CategoriaController@crear')->name('crear_categoria')->middleware('auth');

Route::post('/categoria', 'CategoriaController@guardar')->name('guardar_categoria')->middleware('auth');

Route::get('/categoria/{id}', 'CategoriaController@ver')->name('ver_categoria')->middleware('auth');
Route::get('/categoria/{id}/editar', 'CategoriaController@editar')->name('editar_categoria')->middleware('auth');

Route::put('/categoria/{id}', 'CategoriaController@modificar')->name('modificar_categoria')->middleware('auth');

Route::delete('/categoria/{id}', 'CategoriaController@eliminar')->name('eliminar_categoria')->middleware('auth');

Route::resource('/proveedor', 'ProveedorController');

//Rutas Producto
Route::get('/producto', 'ProductoController@index')->name('lista_producto');
Route::get('/producto/create', 'ProductoController@create')->name('crear_producto');
Route::post('/producto', 'ProductoController@store')->name('guardar_producto');
Route::get('/producto/{id}', 'ProductoController@show')->name('ver_producto');
Route::get('/producto/{id}/edit', 'ProductoController@edit')->name('editar_producto');
Route::put('/producto/{id}', 'ProductoController@update')->name('modificar_producto');
Route::delete('/producto/{id}', 'ProductoController@destroy')->name('eliminar_producto');

//Rutas Proveedor
Route::get('/proveedor', 'ProveedorController@index')->name('lista_proveedor');
Route::get('/proveedor/create', 'ProveedorController@create')->name('crear_proveedor');
Route::post('/proveedor', 'ProveedorController@store')->name('guardar_proveedor');
Route::get('/proveedor/{id}', 'ProveedorController@show')->name('ver_proveedor');
Route::get('/proveedor/{id}/edit', 'ProveedorController@edit')->name('editar_proveedor');
Route::put('/proveedor/{id}', 'ProveedorController@update')->name('modificar_proveedor');
Route::delete('/proveedor/{id}', 'ProveedorController@destroy')->name('eliminar_proveedor');

Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
