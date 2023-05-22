<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ventas_detalles;
use App\Models\Ventas;
use App\Models\Descargas;
use App\Models\Juegos;
use App\Models\Fotos_juegos;
use App\Models\Plataformas;
use App\Models\Juegos_plataformas;
use App\Models\Paises;
use App\Models\Municipios;
use App\Models\Entidades;
use Session;

use PDF;

class AjaxController extends Controller
{
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

        if (!$detalle) {
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
                        ->where('cantidad', '>', 0)
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
                ->where('status', 1)
                ->where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->increment('cantidad', 1);
            Juegos_plataformas::where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->decrement('stock', 1);
        } elseif($accion == 2) {
            Ventas_detalles::where('id_venta', $id_venta)
                ->where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->decrement('cantidad', 1);
            Juegos_plataformas::where('id_juego', $id_juego)
                ->where('id_plataforma', $id_plataforma)
                ->increment('stock', 1);
        } elseif ($accion == 3) {
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
        $num = 0;
        foreach($detalle_venta as $detalle) {
            if ($detalle->cantidad == 0) {
                $dv = Ventas_detalles::find($detalle->id);
                $dv->status = 0;
                $dv->save();
                $num++;
            }
        }

        if ($num ==  count($detalle_venta)) {
            $venta = Ventas::find($id_venta);
            $venta->status = 0;
            $venta->save();
            return
            '<div class="col-md-12">'.
                '<div class="alert alert-danger">'.
                    'Carrito de compras vacío, agrega algunos juegos para continuar con la compra'.
                '</div>'.
             '</div>';
        }
        $csrfToken = csrf_token();
        $detalle_venta = Ventas_detalles::where('status', 1)
                ->where('id_venta', $id_venta)
                ->get();

        $registros = '';
        $registros.= '<div class="table-responsive">';
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
        $registros.= '</div>';
        $registros.=
        '<div class="col-lg-12">'.
                '<div class="main-button">'.
                    '<a href="#" onclick="enviarFormulario(event)">Finalizar compra</a>'.
                '</div>'.
                '<form id="fin_compra" action="'. route("finalizar_compra") .'" method="POST" style="display: none;">'.
                    '<input type="hidden" name="_token" value="' . $csrfToken . '">'.
                    '<input type="hidden" name="id_venta" value="'. $detalle->id_venta .'">';
        foreach($detalle_venta as $detalle) {
            $registros.=
            '<input type="hidden" name="id" value="'. $detalle->id .'">'.
            '<input type="hidden" name="id_juego[]" value="'. $detalle->id_juego .'">'.
            '<input type="hidden" name="id_plataforma[]" value="'.$detalle->id_plataforma .'">'.
            '<input type="hidden" name="cantidad[]" value="'. $detalle->cantidad .'">';
        }
        $registros.=
                '</form>'.
        '</div>';

        return $registros;

    }

    public function cargarMunicipios($id_entidad)
    {
        $municipios = Municipios::select('id', 'nombre')
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

    public function obtenerJuegosByPlataforma($id_plataforma)
    {

        if ($id_plataforma == -1) {
            $juegos = Juegos_plataformas::join('fotos_juegos', 'juegos_plataformas.id_juego', '=', 'fotos_juegos.id_juego')
            ->where('fotos_juegos.status', 1)
            ->select('juegos_plataformas.*', 'fotos_juegos.ruta as ruta')
            ->where('juegos_plataformas.status', 1)
            ->orderBy('juegos_plataformas.id')
            ->limit(12)
            ->get();

        } else {
            $juegos = Juegos_plataformas::join('fotos_juegos', 'juegos_plataformas.id_juego', '=', 'fotos_juegos.id_juego')
                        ->select('juegos_plataformas.*', 'fotos_juegos.ruta as ruta')
                        ->where('fotos_juegos.status', 1)
                        ->where('juegos_plataformas.status', 1)
                        ->where('juegos_plataformas.id_plataforma', $id_plataforma)
                        ->orderBy('juegos_plataformas.id')
                        ->get();
        }
        $datos = '<div class="row">';
        foreach ($juegos as $juego) {
            $datos .=
            '<div class="col-lg-4 col-sm-6">'.
                    '<div class="main-button">'.
                            '<a href="#" onclick="agregarCarrito('.$juego->id_juego .','. $juego->id_plataforma .')">Agregar al carrito</a>'.
                    '</div>'.
                   '<a href="">'.
                       ' <div class="item">'.
                            '<img src="../storage/juegosfotos/'.$juego->ruta.'" alt="">'.
                            '<h4>'.$juego->juegos->nombre.'<br><span>'.$juego->plataformas->nombre.'</span></h4>'.
                            '<ul>'.
                                '<li><i class="fa fa-star"></i>'.$juego->juegos->puntuacion.'</li>'.
                                '<li><i class="fa fa-download"></i>'.$juego->total_descargas.'</li>'.
                            '</ul>'.
                        '</div>'.
                    '</a>'.
                '</div>';
        }
        $datos .= '</div>'.
        '<div class="col-lg-12">'.
            '<div class="main-button">'.
                ' <a href="browse.html">Descubrir más juegos</a>'.
            '</div>'.
        '</div>';
        return $datos;
    }

    public function search($nombre)
    {
        $juegos = Juegos_plataformas::join('fotos_juegos', 'juegos_plataformas.id_juego', '=', 'fotos_juegos.id_juego')
            ->join('juegos', 'juegos_plataformas.id_juego', '=', 'juegos.id')
            ->where('fotos_juegos.status', 1)
            ->whereRaw('LOWER(juegos.nombre) LIKE ?', ['%'.strtolower($nombre).'%'])
            ->select('juegos_plataformas.*', 'fotos_juegos.ruta as ruta')
            ->where('juegos_plataformas.status', 1)
            ->orderBy('juegos.id')
            ->get();

        if ($juegos->count() == 0) {
            return '<div class="col-md-12">'.
                '<div class="alert alert-danger">'.
                    'No se encontraron resultados para: '.$nombre.
                '</div>'.
             '</div>';
        }

        $response =
            '<div class="row">'.
                '<div class="col-lg-12">'.
                    '<div class="alert alert-success" id="respuesta">'.
                    '</div>'.
                '</div>'.
            '</div>';

        $response .=
        '<div class="most-popular">'.
            '<div class="row">'.
                '<div class="col-lg-12">'.
                    '<div class="heading-section">'.
                        '<h4><em>Resultados para</em> '.$nombre.'</h4>'.
                    '</div>'.
                    '<div id="juegos_plataformas">'.
                        '<div class="row">';
        foreach($juegos as $juego) {
            $response.='<div class="col-lg-4 col-sm-6">'.
                '<div class="main-button">'.
                   ' <a href="#"'.
                        'onclick="agregarCarrito('. $juego->id_juego .','.  $juego->id_plataforma .')">Agregar al carrito</a>'.
                '</div>'.
                '<a href="">'.
                    '<div class="item">'.
                        '<img src="../storage/juegosfotos/'.$juego->ruta.'" alt="">'.
                        '<h4>'.$juego->juegos->nombre .'<br><span>'.$juego->plataformas->nombre .'</span>'.
                        '</h4>'.
                        '<ul>'.
                           '<li><i class="fa fa-star"></i>'.  $juego->juegos->puntuacion .'</li>'.
                            '<li><i class="fa fa-download"></i>'.  $juego->total_descargas .'</li>'.
                        '</ul>'.
                    '</div>'.
                '</a>'.
            '</div>';
        }
        $response .=
                        '</div>'.
                    '</div>'.
                '</div>'.
            '</div>'.
        '</div>';
        return $response;
    }

    public function downloadJuego($id_descarga, $tipo)
    {
        $d = Descargas::find($id_descarga);
        if ($tipo == 2)
        {
            $d->status = 2;
        } else {
            $d->status = 1;
        }
        $d->save();

        $descargas = Descargas::join('fotos_juegos', 'descargas.id_juego', '=', 'fotos_juegos.id_juego')
            ->select('descargas.*', 'fotos_juegos.ruta as ruta')
            ->where('descargas.id_usuario', auth()->user()->id)
            ->get();
        
        $response =
        '<div class="gaming-library profile-library">'.
        '<div class="col-lg-12">'.
            '<div class="heading-section">'.
               ' <h4><em>Tu</em> Librería</h4>'.
            '</div>';
            foreach ($descargas as $descarga) {
                $response.= 
                '<div class="item">'.
                    '<ul>'.
                        '<li><img src="../storage/juegosfotos/'. $descarga->ruta .'" alt="" class="templatemo-item"></li>'.
                        '<li>'.
                            '<h4>'. $descarga->juegos->nombre .'</h4><span>'. $descarga->juegos->categorias->nombre .'</span>'.
                        '</li>'.
                        '<li>'.
                            '<h4>Plataforma</h4><span>'. $descarga->plataformas->nombre .'</span>'.
                        '</li>'.
                        '<li>'.
                           ' <h4>Fecha</h4><span>'. $descarga->fecha .'</span>'.
                        '</li>';
                    if ($descarga->status == 2)
                    {
                        $response.=
                        '<li>'.
                            '<h4>Estado</h4><span>'.
                               'Descargado'.
                            '</span>'.
                        '</li>'.
                        '<li>'.
                            '<div class="main-border-button border-no-active"><a href="" onclick="downloadJuego('. $descarga->id .', 1)">Descargado</a></div>'.
                        '</li>';
                    } else {
                        $response.=
                        '<li>'.
                            '<h4>Estado</h4><span>'.
                               ' No descargado'.
                            '</span>'.
                        '</li>'.
                        '<li>'.
                           ' <div class="main-border-button"><a href="" onclick="downloadJuego('. $descarga->id .', 2)">Descargar</a></div>'.
                       ' </li>';
                    }
                    $response.=
                    '</ul>'.
                '</div>';
            }
        $response.=
        '</div>'.
        '</div>';
        return $response;
    }
}
