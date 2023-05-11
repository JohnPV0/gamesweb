<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tipos_pago;

class Tipos_pagoController extends Controller
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
        $tipos_pago = Tipos_pago::where('status', 1)->orderBy('id')->get();
        return view('TiposPago.index')->with('tipos_pago', $tipos_pago);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TiposPago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Tipos_pago::create($datos);
        return redirect('/tipos_pago');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo_pago = Tipos_pago::find($id);
        return view('TiposPago.read')->with('tipo_pago', $tipo_pago);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo_pago = Tipos_pago::find($id);
        return view('TiposPago.edit')->with('tipo_pago', $tipo_pago);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $tipo_pago = Tipos_pago::find($id);
        $tipo_pago->update($datos);
        return redirect('/tipos_pago');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo_pago = Tipos_pago::find($id);
        $tipo_pago->status = 0;
        $tipo_pago->save();
        return redirect('/tipos_pago');
    }
}
