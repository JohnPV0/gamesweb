<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comentarios;
use App\Models\Users;
use App\Models\Juegos;

class ComentariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('usuarioAdmin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios = Comentarios::where('status', 1)->orderBy('id')->get();
        return view('Comentarios.index')->with('comentarios', $comentarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $juegos = Juegos::select('id', 'nombre')->orderBy('nombre')->get();
        $usuarios = Users::select('id', 'username')->orderBy('username')->get();
        return view('Comentarios.create')
                ->with('juegos', $juegos)
                ->with('usuarios', $usuarios);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Comentarios::create($datos);
        return redirect('/comentarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comentario = Comentarios::find($id);
        return view('Comentarios.read')->with('comentario', $comentario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comentario = Comentarios::find($id);
        $juegos = Juegos::select('id', 'nombre')->orderBy('nombre')->get();
        $usuarios = Users::select('id', 'username')->orderBy('username')->get();
        return view('Comentarios.edit')
                ->with('comentario', $comentario)
                ->with('juegos', $juegos)
                ->with('usuarios', $usuarios);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $comentario = Comentarios::find($id);
        $comentario->update($datos);
        return redirect('/comentarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comentario = Comentarios::find($id);
        $comentario->status = 0;
        $comentario->save();
        return redirect('/comentarios');
    }
}
