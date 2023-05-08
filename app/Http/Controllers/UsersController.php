<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Users;
use App\Models\Paises;
use App\Models\Entidades;
use App\Models\Municipios;
use App\Models\Tipos_usuario;
use Illuminate\Support\Facades\Storage;

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
                    ->where('status', 1)
                    ->orderBy('nombre')->get();
        $tipos_usuario = Tipos_usuario::select('id','nombre')
                    ->where('status', 1)
                    ->orderBy('nombre')->get();
        return view('Users.create')
                ->with('paises',$paises)
                ->with('tipos_usuario',$tipos_usuario);
                
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();

        $datos['password'] = Hash::make($request->input('password'));
        $archivo = request()->file('foto');

        if (!is_null($archivo)){
            $hora = date('h-i-s');
            $fecha = date('d-m-Y'); 
            $prefijo = $fecha."_".$hora;
            $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();
            $r1 = Storage::disk("usersfotos")->put($nombre_foto, \File::get($archivo));

            if ($r1) {
                $datos['ruta_foto_perfil'] = $nombre_foto;
                Users::create($datos);
                return redirect('/users');
            } else {
                return 'Error al intentar guardar la foto <br> <br> <a href="./users">Regresar</a>';
            }
        }
        $datos['ruta_foto_perfil'] = 'default_foto_perfil.jpg';
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
                    ->where('status', 1)
                    ->orderBy('nombre')->get();
        $entidades = Entidades::select('id','nombre')
                    ->where('id_pais', $user->municipios->entidades->id_pais)
                    ->where('status', 1)
                    ->orderBy('nombre')->get();
        $municipios = Municipios::select('id','nombre')
                    ->where('id_entidad', $user->municipios->id_entidad)
                    ->where('status', 1)
                    ->orderBy('nombre')->get();
        $tipos_usuario = Tipos_usuario::select('id','nombre')
                    ->where('status', 1)
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

        $datos['password'] = Hash::make($request->input('password'));

        $archivo = request()->file('foto');
        if (!is_null($archivo)){
            $hora = date('h-i-s');
            $fecha = date('d-m-Y'); 
            $prefijo = $fecha."_".$hora;
            $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();
            $r1 = Storage::disk("usersfotos")->put($nombre_foto, \File::get($archivo));

            if ($r1) {
                $datos['ruta_foto_perfil'] = $nombre_foto;
                $user->update($datos);
                return redirect('/users');
            } else {
                return 'Error al intentar guardar la foto <br> <br> <a href="./users">Regresar</a>';
            }
        }
        $datos['ruta_foto_perfil'] = 'default_foto_perfil.jpg';

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

    public function login()
    {
        return view('Users.login');
    }
}
