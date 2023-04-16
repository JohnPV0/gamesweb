<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fotos_juegos;
use App\Models\Juegos;

class Fotos_juegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos_juegos = Fotos_juegos::where('status', 1)->orderBy('id')->get();
        return view('FotosJuegos.index')->with('fotos_juegos', $fotos_juegos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $juegos = Juegos::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('FotosJuegos.create')->with('juegos', $juegos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Fotos_juegos::create($datos);
        return redirect('/fotos_juegos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $foto_juego = Fotos_juegos::find($id);
        return view('FotosJuegos.read')->with('foto_juego', $foto_juego);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $foto_juego = Fotos_juegos::find($id);
        $juegos = Juegos::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('FotosJuegos.edit')
                ->with('foto_juego', $foto_juego)
                ->with('juegos', $juegos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request()->all();
        $foto_juego = Fotos_juegos::find($id);
        $foto_juego->update($datos);
        return redirect('/fotos_juegos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $foto_juego = Fotos_juegos::find($id);
        $foto_juego->status = 0;
        $foto_juego->save();
        return redirect('/fotos_juegos');
    }
}
