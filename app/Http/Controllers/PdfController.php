<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Descargas;
use App\Models\Ventas;
use App\Models\Ventas_detalles;
use Illuminate\Support\Facades\DB;
use PDF;

class PdfController extends Controller
{
    public function finalizarCompra(Request $request)
    {
        $detalle_venta = json_decode($request->input('detalle_venta'));
        
        $total = 0;
        $subtotal = 0;
        foreach($detalle_venta as $detalle) {
            $subtotal +=  $detalle->cantidad * $detalle->precio_venta;
        }
        $total = $subtotal + ($subtotal * 0.16);

        

        $venta = Ventas::find($detalle_venta[0]->id_venta);
        $venta->subtotal = $subtotal;
        $venta->iva = $subtotal * 0.16;
        $venta->total = $total;
        $venta->status = 2;
        $venta->save();


        foreach($detalle_venta as $detalle) {
            $dv = Ventas_detalles::where('id_venta', $detalle->id_venta)
                ->where('id_juego', $detalle->id_juego)
                ->where('id_plataforma', $detalle->id_plataforma)
                ->where('status', 1)
                ->first();
            $dv->status = 2;
            $dv->save();   

            $descarga = [
                'id_juego' => $detalle->id_juego,
                'id_plataforma' => $detalle->id_plataforma,
                'id_usuario' => $venta->id_cliente,
                'fecha' => $venta->fecha,
                'status' => 1
            ];

            Descargas::create($descarga);
        }
        $success="Compra realizada corectamente";
        return view('Mensajes.compra')->with('success', $success)->with('venta', $venta);

    }

    public function downloadReceive($id)
    {
        $venta = Ventas::find($id);
        $detalle_venta = Ventas_detalles::where('id_venta', $id)->get();
        $pdf = PDF::loadView('pdf.recibo', compact('detalle_venta', 'venta'));
        return $pdf->download('recibo.pdf');
    }

    public function downloadVentas() 
    {
        $fechaInicio = \Carbon\Carbon::now()->subWeek()->toDateString();
        $fechaFin = \Carbon\Carbon::now()->toDateString();
        $ventas = Ventas::where('status', 2)->get();
        $pdf = PDF::loadView('pdf.ventas', compact('ventas', 'fechaInicio', 'fechaFin'));
        return $pdf->download('ventas.pdf');
    }

    public function downloadJuegos()
    {
        $juegos = DB::table('ventas_detalles')
            ->join('juegos', 'ventas_detalles.id_juego', '=', 'juegos.id')
            ->join('ventas', 'ventas_detalles.id_venta', '=', 'ventas.id')
            ->where('ventas_detalles.status', 2)
            ->select('juegos.nombre, ventas_detalles.id_venta, ventas.fecha, ventas_detalles.id_juego, ventas_detalles.id_plataforma')
            ->limit(10)
            ->get();

       

        $pdf = PDF::loadView('pdf.juegos', compact('juegos', 'venta'));
        return $pdf->download('juegos-mas-vendidos.pdf');
    }   


}
