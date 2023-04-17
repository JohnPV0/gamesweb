<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tipos_usuario;

class Tipos_usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_usuario = Tipos_usuario::where('status', 1)->orderBy('id')->get();
        return view('TiposUsuario.index')->with('tipos_usuario', $tipos_usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TiposUsuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Tipos_usuario::create($datos);
        return redirect('/tipos_usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo_usuario = Tipos_usuario::find($id);
        return view('TiposUsuario.read')->with('tipo_usuario', $tipo_usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo_usuario = Tipos_usuario::find($id);
        return view('TiposUsuario.edit')->with('tipo_usuario', $tipo_usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $tipos_usuario = Tipos_usuario::find($id);
        $tipos_usuario->update($datos);
        return redirect('/tipos_usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipos_usuario = Tipos_usuario::find($id);
        $tipos_usuario->status = 0;
        $tipos_usuario->save();
        return redirect('/tipos_usuario');
    }
}
