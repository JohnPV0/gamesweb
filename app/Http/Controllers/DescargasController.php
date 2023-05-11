<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Descargas;
use App\Models\Users;
use App\Models\Juegos;

class DescargasController extends Controller
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
        $descargas = Descargas::where('status', 1)->orderBy('id')->get();
        return view('Descargas.index')->with('descargas', $descargas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $juegos = Juegos::select('id', 'nombre')->orderBy('nombre')->get();
        $usuarios = Users::select('id', 'username')->orderBy('username')->get();
        return view('Descargas.create')
                ->with('juegos', $juegos)
                ->with('usuarios', $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Descargas::create($datos);
        return redirect('/descargas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $descarga = Descargas::find($id);
        return view('Descargas.read')->with('descarga', $descarga);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $descarga = Descargas::find($id);
        $juegos = Juegos::select('id', 'nombre')->orderBy('nombre')->get();
        $usuarios = Users::select('id', 'username')->orderBy('username')->get();
        return view('Descargas.edit')
                ->with('descarga', $descarga)
                ->with('juegos', $juegos)
                ->with('usuarios', $usuarios);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $descarga = Descargas::find($id);
        $descarga->update($datos);
        return redirect('/descargas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $descarga = Descargas::find($id);
        $descarga->status = 0;
        $descarga->save();
        return redirect('/descargas');
    }
}
