<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Juegos;
use App\Models\Categorias;

class JuegosController extends Controller
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
        $juegos = Juegos::where('status', 1)->orderBy('id')->get();
        return view('Juegos.index')->with('juegos', $juegos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categorias::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Juegos.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Juegos::create($datos);
        return redirect('/juegos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $juego = Juegos::find($id);
        return view('Juegos.read')->with('juego', $juego);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $juego = Juegos::find($id);
        $categorias = Categorias::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Juegos.edit')
                ->with('juego', $juego)
                ->with('categorias', $categorias);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $juego = Juegos::find($id);
        $juego->update($datos);
        return redirect('/juegos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $juego = Juegos::find($id);
        $juego->status = 0;
        $juego->save();
        return redirect('/juegos');
    }
}
