<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Contactos;
use App\Models\ContactosListado;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado = ContactosListado::all();
        return view('contactos/inicio', compact('listado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::all();
        return view('contactos/agregar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactos = new Contactos();
        $contactos->id_categoria = $request->post('categoria');
        $contactos->nombre = $request->post('nombre');
        $contactos->paterno = $request->post('paterno'); 
        $contactos->materno = $request->post('materno');
        $contactos->telefono = $request->post('telefono');
        $contactos->email = $request->post('correo');
        $contactos->save();
        return redirect()->route('contactos.index')->with('success', 'Contacto agregado correctamente'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactos = ContactosListado::find($id);
        return view('contactos/eliminar', compact('contactos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactos = Contactos::find($id);
        $categorias = Categorias::all();
        return view('contactos/editar', compact('contactos', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactos = Contactos::find($id);
        $contactos->id_categoria = $request->post('categoria');
        $contactos->nombre = $request->post('nombre');
        $contactos->paterno = $request->post('paterno');
        $contactos->materno = $request->post('materno');
        $contactos->telefono = $request->post('telefono');
        $contactos->email = $request->post('correo');
        $contactos->save();
        return redirect()->route('contactos.index')->with('success', 'Contacto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactos = Contactos::find($id);
        $contactos->delete();
        return redirect()->route('contactos.index')->with('success', 'Contacto eliminado correctamente');
    }
}
