<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ventas;
use App\Models\Ventas_detalles;

use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function index()
    {
        return view('Estadisticas.index');
    }

    public function ventas_last_week()
    {

        // Obtener fecha hace una semana
        $fechaInicio = \Carbon\Carbon::now()->subWeek()->toDateString();
        $fechaFin = \Carbon\Carbon::now()->toDateString();

        // Consulta para obtener las ventas por día de la última semana
        $ventas = DB::table('ventas')
            ->select(DB::raw('fecha, COUNT(*) as cantidad_ventas'))
            ->whereBetween('fecha', [$fechaInicio, $fechaFin])
            ->where('status', 2)
            ->groupBy('fecha')
            ->get();

        $data = [
            'labels' => [],
            'values' => [],
        ];

        // Recorrer los resultados y agregar los datos al arreglo
        foreach ($ventas as $venta) {
            $fecha = $venta->fecha;
            $cantidadVentas = $venta->cantidad_ventas;

            $data['labels'][] = $fecha;
            $data['values'][] = $cantidadVentas;
        }

        return $data;
    }

    function juegos_mas_vendidos()
    {
        $juegos = DB::table('ventas_detalles')
            ->join('juegos', 'ventas_detalles.id_juego', '=', 'juegos.id')
            ->where('ventas_detalles.status', 2)
            ->select(DB::raw('juegos.nombre, COUNT(*) as cantidad'))
            ->groupBy('juegos.nombre')
            ->orderBy('cantidad', 'desc')
            ->limit(5)
            ->get();

        $data = [
            'labels' => [],
            'values' => [],
        ];

        // Recorrer los resultados y agregar los datos al arreglo
        foreach ($juegos as $juego) {
            $nombre = $juego->nombre;
            $cantidad = $juego->cantidad;

            $data['labels'][] = $nombre;
            $data['values'][] = $cantidad;
        }

        return $data;
    }

    function usuarios_mas_compras()
    {
        $usuarios = DB::table('ventas')
            ->join('users', 'ventas.id_cliente', '=', 'users.id')
            ->where('ventas.status', 2)
            ->select(DB::raw('users.nombre, COUNT(*) as cantidad'))
            ->groupBy('users.nombre')
            ->orderBy('cantidad', 'desc')
            ->limit(5)
            ->get();

        $data = [
            'labels' => [],
            'values' => [],
        ];

        // Recorrer los resultados y agregar los datos al arreglo
        foreach ($usuarios as $usuario) {
            $nombre = $usuario->nombre;
            $cantidad = $usuario->cantidad;

            $data['labels'][] = $nombre;
            $data['values'][] = $cantidad;
        }

        return $data;
    }
    
}
