<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ApiCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::All();
        return response()->json(['datos' => $categorias], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Categoria;
        $c->nombre = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->save();
        return response()->json(['mensaje' => 'la categoria se ha registrado'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return response()->json(['datos' => $categoria], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $c = Categoria::find($id);
        $c->nombre = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->save();
        return response()->json(['mensaje' => 'la categoria se ha registrado'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Categoria::find($id);
        $c->delete();
        return response()->json(['mensaje' => 'la categoria se ha eliminado'], 200);
    }
}
