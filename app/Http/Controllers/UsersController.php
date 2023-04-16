<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;
use App\Models\Paises;
use APp\Models\Entidades;
use App\Models\Municipios;
use APP\Models\Tipos_usuario;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::where('status', 1)->orderBy('id')->get();
        return view('Users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Paises::select('id','nombre')
                  ->orderBy('nombre')->get();
        $entidades = Entidades::select('id','nombre')
                  ->orderBy('nombre')->get();
        $municipios = Municipios::select('id','nombre')
                  ->orderBy('nombre')->get();
        $tipos_usuario = Tipos_usuario::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Users.create')
                ->with('paises',$paises)
                ->with('entidades',$entidades)
                ->with('municipios',$municipios)
                ->with('tipos_usuario',$tipos_usuario);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Users::create($datos);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Users::find($id);
        return view('Users.read')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Users::find($id);
        $paises = Paises::select('id','nombre')
                  ->orderBy('nombre')->get();
        $entidades = Entidades::select('id','nombre')
                  ->orderBy('nombre')->get();
        $municipios = Municipios::select('id','nombre')
                  ->orderBy('nombre')->get();
        $tipos_usuario = Tipos_usuario::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Users.edit')
                ->with('user',$user)
                ->with('paises',$paises)
                ->with('entidades',$entidades)
                ->with('municipios',$municipios)
                ->with('tipos_usuario',$tipos_usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $user = Users::find($id);
        $user->update($datos);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Users::find($id);
        $user->status = 0;
        $user->save();
        return redirect('/users');
    }
}
