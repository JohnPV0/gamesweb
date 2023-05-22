<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Juegos_plataformas;
use App\Models\Descargas;
use App\Models\Fotos_juegos;

class DetalleController extends Controller
{
    public function detalle($id)
    {
        $juego_plataforma = Juegos_plataformas::where('id', $id)->first();
        $total_descargas = Descargas::where('id_juego', $juego_plataforma->id_juego)->count();
        $ruta_foto = Fotos_juegos::where('id_juego', $id)->first();
        return view('detalle')->with('juego_plataforma', $juego_plataforma)->with('total_descargas', $total_descargas)->with('ruta_foto', $ruta_foto);
    }
}
