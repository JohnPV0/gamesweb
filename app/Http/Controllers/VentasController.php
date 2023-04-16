<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ventas;
use App\Models\Users;
use App\Models\Tipos_pago;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Ventas::where('status', 1)->orderBy('id')->get();
        return view('Ventas.index')->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Users::select('id','username')
                  ->orderBy('username')->get();
        $tipos_pago = Tipos_pago::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Ventas.create')
                ->with('users', $users)
                ->with('tipos_pago', $tipos_pago);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Ventas::create($datos);
        return redirect('/ventas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venta = Ventas::find($id);
        return view('Ventas.read')->with('venta', $venta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venta = Ventas::find($id);
        $users = Users::select('id','username')
                  ->orderBy('username')->get();
        $tipos_pago = Tipos_pago::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Ventas.edit')
                ->with('venta', $venta)
                ->with('users', $users)
                ->with('tipos_pago', $tipos_pago);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $venta = Ventas::find($id);
        $venta->update($datos);
        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venta = Ventas::find($id);
        $venta->status = 0;
        $venta->save();
        return redirect('/ventas');
    }
}
