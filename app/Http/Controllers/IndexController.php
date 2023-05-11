<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Juegos;
use App\Models\Fotos_juegos;
use App\Models\Plataformas;
use App\Models\Juegos_plataformas;

class IndexController extends Controller
{
    public function verJuegos()
    {
        $plataformas = Plataformas::where('status', 1)->orderBy('nombre')->get();

        $juegos = Juegos_plataformas::join('fotos_juegos', 'juegos_plataformas.id_juego', '=', 'fotos_juegos.id_juego')
                        ->where('fotos_juegos.status', 1)
                        ->select('juegos_plataformas.*', 'fotos_juegos.ruta as ruta')
                        ->where('juegos_plataformas.status', 1)
                        ->orderBy('juegos_plataformas.id')
                        ->get();
        return view('home')->with('juegos', $juegos)->with('plataformas', $plataformas);
    }
}
