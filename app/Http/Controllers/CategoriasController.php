<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias/inicio', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias/agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categorias();
        $categoria->nombre = $request->post('nombre');
        $categoria->descripcion = $request->post('descripcion');
        $categoria->save();
        return redirect()->route('categorias.index')->with('success', 'Categoria agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categorias::find($id);
        return view('categorias/eliminar', compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categorias = Categorias::find($id);
        return view('categorias/editar', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorias = Categorias::find($id);
        $categorias->nombre = $request->post('nombre');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = Categorias::find($id);
        $categorias->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria eliminada correctamente');
    }
}
