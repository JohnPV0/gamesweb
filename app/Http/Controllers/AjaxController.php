<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ventas_detalles;
use App\Models\Ventas;
use App\Models\Juegos;
use App\Models\Fotos_juegos;
use App\Models\Plataformas;
use App\Models\Juegos_plataformas;
use Session;

class AjaxController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function agregarCarrito($id_juego, $id_plataforma)
    {
        //user_id = 1 es que es venta online
        $id_user = 1;
        //Cliente que hace la compra
        $id_cliente = auth()->id();

        $fecha = date('Y-m-d');

        //status -> 0 = carrito vacío o sin ventas
        //status -> 1 = carrito
        //status -> 2 = venta finalizada

        $tot_venta_carrito = Ventas::where('status', 1)
                    ->where('id_cliente', $id_cliente)
                    ->where('id_usuario', $id_user)
                    ->count();

        if ($tot_venta_carrito == 0) {
            \DB::table('ventas')->insert([
                'id_cliente' => $id_cliente,
                'fecha' => $fecha,
                'subtotal' => 0,
                'iva' => 0,
                'total' => 0,
                'id_tipo_pago'=>5,
                'id_usuario' => $id_user,
                'status' => 1
            ]);
        }

        $venta = Ventas::where('status', 1)
                    ->where('id_cliente', $id_cliente)
                    ->first();

        $id_venta = $venta->id;

        $juego = Juegos_plataformas::where('id_juego', $id_juego)
                    ->where('id_plataforma', $id_plataforma)
                    ->first();
        $detalle = Ventas_detalles::where('id_venta', $id_venta)
                    ->where('id_juego', $id_juego)
                    ->where('id_plataforma', $id_plataforma)
                    ->first();

        if (!$detalle)
        {
            \DB::table('ventas_detalles')->insert([
                'id_venta' => $id_venta,
                'id_juego' => $id_juego,
                'id_plataforma' => $id_plataforma,
                'cantidad' => 1,
                'precio_compra' => $juego->precio_compra,
                'precio_venta' => $juego->precio_venta,
                'status' => 1
            ]);
        } else {
            Ventas_detalles::where('id_venta', $id_venta)
                ->where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->increment('cantidad', 1);
        }

        Juegos_plataformas::where('id_juego', $id_juego)
                    ->where('id_plataforma', $id_plataforma)
                    ->decrement('stock', 1);

        return "<h3 style='color:black;'>Producto agregado al carrito</h3>";
    }

    public function verCarrito()
    {
        $id_user = 1;
        $id_cliente = auth()->id();

        $tot_venta_carrito = Ventas::where('status', 1)
                    ->where('id_cliente', $id_cliente)
                    ->where('id_usuario', $id_user)
                    ->count();

        $venta = Ventas::where('status', 1)
                    ->where('id_cliente', $id_cliente)
                    ->get();

        $id_venta = 0;
        foreach($venta as $v) {
            $id_venta = $v->id;
        }

        $detalle_venta = Ventas_detalles::where('status', 1)
                        ->where('id_venta', $id_venta)
                        ->get();
        return view('Ajax.carrito')
            ->with('venta', $venta)
            ->with('detalle_venta', $detalle_venta)
            ->with('tot_venta_carrito', $tot_venta_carrito);
    }

    public function addDelProducto($accion, $id_juego, $id_plataforma)
    {
        $user_id = 1;
        $client_id = auth()->id();
        $venta = Ventas::where('status', 1)
                ->where('id_cliente', $client_id)
                ->first();

        $id_venta = $venta->id;

        if($accion == 1) {
            Ventas_detalles::where('id_venta', $id_venta)
                ->where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->increment('cantidad', 1);
            Juegos_plataformas::where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->decrement('stock', 1);
        } else if($accion == 2){
            Ventas_detalles::where('id_venta', $id_venta)
                ->where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->decrement('cantidad', 1);
            Juegos_plataformas::where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->increment('stock', 1);
        } else if ($accion == 3) {
            $detalle = Ventas_detalles::where('id_venta', $id_venta)
                ->where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->first();
            $detalle_venta = Ventas_detalles::find($detalle->id);
            $detalle_venta->status = 0;
            $detalle_venta->save();
            Juegos_plataformas::where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->increment('stock', $detalle->cantidad);
        }

        $detalle_venta = Ventas_detalles::where('status', 1)
                ->where('id_venta', $id_venta)
                ->get();

        $registros = "";
        $registros.= '<table class="table table-striped table-bordered" style="color:white;">';
        $registros.= '<thead>';
        $registros.= '<tr>';
        $registros.= '<th>Juego</th>';
        $registros.= '<th>Plataforma</th>';
        $registros.= '<th>Cantidad</th>';
        $registros.= '<th>Precio</th>';
        $registros.= '<th>Subtotal</th>';
        $registros.= '<th>Acciones</th>';
        $registros.= '</tr>';
        $registros.= '</thead>';
        $registros.= '<tbody >';
        foreach($detalle_venta as $detalle) {
            $registros.= '<tr >';
            $registros.= '<td style="color:white;">'.$detalle->juegos->nombre.'</td>';
            $registros.= '<td style="color:white;">'.$detalle->plataformas->nombre.'</td>';
            $registros.= '<td style="color:white;">'.$detalle->cantidad.'</td>';
            $registros.= '<td style="color:white;">'.$detalle->precio_venta.'</td>';
            $registros.= '<td style="color:white;">'.$detalle->cantidad * $detalle->precio_venta.'</td>';
            $registros.= '<td style="color:white;">';
            $registros.= '<button class="btn btn-primary" onclick="addDelProd(1,'.$detalle->id_juego.','.$detalle->id_plataforma.')">';
            $registros.= '<i class="fa fa-plus"></i>';
            $registros.= '</button>';
            $registros.= '<button class="btn btn-secondary" onclick="addDelProd(2,'.$detalle->id_juego.','.$detalle->id_plataforma.')">';
            $registros.= '<i class="fa fa-minus"></i>';
            $registros.= '</button>';
            $registros.= '<button class="btn btn-danger" onclick="addDelProd(3,'.$detalle->id_juego.','.$detalle->id_plataforma.')">';
            $registros.= '<i class="fa fa-trash"></i>';
            $registros.= '</button>';
            $registros.= '</td>';
            $registros.= '</tr>';
        }
        $registros.= '</tbody>';
        $registros.= '</table>';

        return $registros;

    }

    public function cargarMunicipios($id_entidad) 
    {
        $municipios = Municipios::select('id','nombre')
                        ->where('id_entidad', $id_entidad)
                        ->where('status', 1)
                        ->orderBy('nombre')->get();
        return $municipios;
    }

    
    public function cargarEntidades($id_pais)
    {
        $entidades = Entidades::select('id', 'nombre')
                            ->where('id_pais', $id_pais)
                            ->where('status', 1)
                            ->orderBy('nombre')->get();
        return $entidades;
    }
}
