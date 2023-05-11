<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juegos;
use App\Models\Fotos_juegos;
use App\Models\Plataformas;
use App\Models\Juegos_plataformas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
}
