<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Fotos_juegos;
use App\Models\Juegos;

class Fotos_juegosController extends Controller
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
        $hora = date('h-i-s');
        $fecha = date('d-m-Y'); 
        $prefijo = $fecha."_".$hora;

        $archivo = request()->file('foto');
        $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();


        $r1 = Storage::disk("juegosfotos")->put($nombre_foto, \File::get($archivo));

        if ($r1) {
            $datos['ruta'] = $nombre_foto;
            Fotos_juegos::create($datos);
            return redirect('/fotos_juegos');
        } else {
            return 'Error al intentar guardar la foto <br> <br> <a href="./fotos_juegos">Regresar</a>';
        }
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
        $datos = $request->all();
        $foto_juego = Fotos_juegos::find($id);

        $hora = date('h-i-s');
        $fecha = date('d-m-Y'); 
        $prefijo = $fecha."_".$hora;

        $archivo = request()->file('foto');
        $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();


        $r1 = Storage::disk("juegosfotos")->put($nombre_foto, \File::get($archivo));

        if ($r1){
            $datos['ruta'] = $nombre_foto;
            $foto_juego->update($datos);
            return redirect('/fotos_juegos');
        } else {
            return 'Error al intentar guardar la foto <br> <br> <a href="./fotos_juegos">Regresar</a>';
        }
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
