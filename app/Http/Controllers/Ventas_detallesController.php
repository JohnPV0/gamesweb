<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ventas_detalles;
use App\Models\Ventas;
use App\Models\Juegos;
use App\Models\Plataformas;

class Ventas_detallesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas_detalles = Ventas_detalles::where('status', 1)->orderBy('id')->get();
        return view('VentasDetalles.index')->with('ventas_detalles', $ventas_detalles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ventas = Ventas::select('id','fecha','id_cliente')
                  ->orderBy('fecha')->get();
        $juegos = Juegos::select('id','nombre')
                  ->orderBy('nombre')->get();
        $plataformas = Plataformas::select('id','nombre')
                ->orderBy('nombre')->get();
        return view('VentasDetalles.create')
                ->with('ventas', $ventas)
                ->with('juegos', $juegos)
                ->with('plataformas', $plataformas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Ventas_detalles::create($datos);
        return redirect('/ventas_detalles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venta_detalle = Ventas_detalles::find($id);
        return view('VentasDetalles.read')->with('ventas_detalle', $venta_detalle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venta_detalle = Ventas_detalles::find($id);
        $ventas = Ventas::select('id','fecha', 'id_cliente')
                  ->orderBy('fecha')->get();
        $juegos = Juegos::select('id','nombre')
                  ->orderBy('nombre')->get();
        $plataformas = Plataformas::select('id','nombre')
                ->orderBy('nombre')->get();
        return view('VentasDetalles.edit')
                ->with('ventas_detalle', $venta_detalle)
                ->with('ventas', $ventas)
                ->with('juegos', $juegos)
                ->with('plataformas', $plataformas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $ventas_detalle = Ventas_detalles::find($id);
        $ventas_detalle->update($datos);
        return redirect('/ventas_detalles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ventas_detalle = Ventas_detalles::find($id);
        $ventas_detalle->status = 0;
        $ventas_detalle->save();
        return redirect('/ventas_detalles');
    }
}
