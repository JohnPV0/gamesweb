<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juegos_plataformas;
use App\Models\Juegos;
use App\Models\Plataformas;

class Juegos_plataformasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos_plataformas = Juegos_plataformas::where('status', 1)->orderBy('id')->get();
        return view('JuegosPlataformas.index')->with('juegos_plataformas', $juegos_plataformas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $juegos = Juegos::select('id','nombre')
                  ->orderBy('nombre')->get();
        $plataformas = Plataformas::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('JuegosPlataformas.create')
                ->with('juegos', $juegos)
                ->with('plataformas', $plataformas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Juegos_plataformas::create($datos);
        return redirect('/juegos_plataformas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $juego_plataforma = Juegos_plataformas::find($id);
        return view('JuegosPlataformas.read')->with('juego_plataforma', $juego_plataforma);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $juego_plataforma = Juegos_plataformas::find($id);
        $juegos = Juegos::select('id','nombre')
                  ->orderBy('nombre')->get();
        $plataformas = Plataformas::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('JuegosPlataformas.edit')
                ->with('juego_plataforma', $juego_plataforma)
                ->with('juegos', $juegos)
                ->with('plataformas', $plataformas);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $juego_plataforma = Juegos_plataformas::find($id);
        $juego_plataforma->update($datos);
        return redirect('/juegos_plataformas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $juego_plataforma = Juegos_plataformas::find($id);
        $juego_plataforma->status = 0;
        $juego_plataforma->save();
        return redirect('/juegos_plataformas');
    }
}
