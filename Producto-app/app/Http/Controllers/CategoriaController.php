<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        return view('admin.categoria.listar');
    }

    public function crear()
    {
        return view('admin.categoria.crear');
    }

    public function guardar(Request $request)
    {
        return $request;
    }
    
    public function ver($id)
    {
        $id_cat = $id;
        return view('admin.categoria.ver', ['id_cat' => $id]);
        //return view('admin.categoria.ver')->with('id_cat',$id);
        //return view('admin.categoria.ver', compact('id_cat'));
    }

    public function editar($id)
    {
        $id_cat = $id;
        return view('admin.categoria.editar', ['id_cat' => $id]);
    }
    
    public function modificar(Request $request, $id)
    {
        return $request;
    }

    public function eliminar($id)
    {
        return "eliminado";
    }
}
