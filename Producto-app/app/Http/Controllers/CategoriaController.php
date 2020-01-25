<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function listar()
    {
        $categorias = Categoria::paginate(2);
        return view('admin.categoria.listar', compact('categorias'));
    }

    public function crear()
    {
        return view('admin.categoria.crear');
    }

    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|unique:categorias|max:100|min:2',
            'descripcion' => 'required',
        ]);
        
        $c = new Categoria;
        $c->nombre = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->save();
        return redirect('/categoria')->with('ok', 'La categoria se ha registrado');
        //return response()->json(['datos' => $c, 'La categoria se ha registrado']);
    }
    
    public function ver($id)
    {
        $categoria = Categoria::find($id);
        /*$id_cat = $id;
        return view('admin.categoria.ver', ['id_cat' => $id]);*/
        //return view('admin.categoria.ver')->with('id_cat',$id);
        //return view('admin.categoria.ver', compact('id_cat'));
        return view('admin.categoria.ver', compact('categoria'));
    }

    public function editar($id)
    {
        $categoria = Categoria::find($id);
        
        return view('admin.categoria.editar', compact('categoria'));
    }
    
    public function modificar(Request $request, $id)
    {
        $c = Categoria::find($id);
        $c->nombre = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->save();
        return redirect('/categoria')->with('ok', 'La categoria se ha modificado');
    }

    public function eliminar($id)
    {
        $c = Categoria::find($id);
        $c->delete();
        return redirect('/categoria')->with('ok', 'La categoria se ha eliminado');
    }

    public function buscar(Request $request)
    {
        $categoria = Categoria::where('nombre', 'like', '%'.$request->buscar.'%')->get();
        return view('admin.categoria.listar', compact('categorias'));
    }
}
