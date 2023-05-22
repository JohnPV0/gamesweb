<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Descargas;

class ProfileController extends Controller
{
    public function index()
    {
        $descargas = Descargas::join('fotos_juegos', 'descargas.id_juego', '=', 'fotos_juegos.id_juego')
            ->select('descargas.*', 'fotos_juegos.ruta as ruta')
            ->where('descargas.id_usuario', auth()->user()->id)
            ->get();
        $total_juegos = Descargas :: where('id_usuario', auth()->user()->id)->count();
        return view('profile')
                ->with('descargas', $descargas)
                ->with('total_juegos', $total_juegos);
    }

}
