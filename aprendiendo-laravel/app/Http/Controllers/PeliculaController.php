<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado1 de mis películas';
        return view('pelicula.index', [
            'titulo'=>$titulo,
            'pagina'=>$pagina
        ]);
    }
}