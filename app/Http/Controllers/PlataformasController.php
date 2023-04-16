<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plataformas;

class PlataformasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plataformas = Plataformas::where('status', 1)->orderBy('id')->get();
        return view('Plataformas.index')->with('plataformas', $plataformas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Plataformas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Plataformas::create($datos);
        return redirect('/plataformas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plataforma = Plataformas::find($id);
        return view('Plataformas.read')->with('plataforma', $plataforma);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plataforma = Plataformas::find($id);
        return view('Plataformas.edit')->with('plataforma', $plataforma);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $plataforma = Plataformas::find($id);
        $plataforma->update($datos);
        return redirect('/plataformas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plataforma = Plataformas::find($id);
        $plataforma->status = 0;
        $plataforma->save();
        return redirect('/plataformas');
    }
}
