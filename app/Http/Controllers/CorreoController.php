<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Correos;

use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{

    public function __construct()
    {
        $this->middleware('usuarioAdmin')->only('index');
    }

    public function index()
    {
        $correos = Correos::where('status', 1)
                    ->orderBy('id')->get();
        return view('Correos.index')->with('correos', $correos);
    }

    public function contacto()
    {
        return view('Correo.contacto');
    }

    public function enviar(Request $request) 
    {
        $destinatario = $request->input('email');
        $asunto = $request->input('asunto');
        $mensaje = $request->input('mensaje');

        $data = array('mensaje' => $mensaje);
        $res = Mail::send('Correo.plantilla', $data, function($message) use ($asunto, $destinatario) {
            $message->from('jperezv3@toluca.tecnm.mx', 'John Pérez Valencia');  // Correo y nombre del remitente
            $message->to($destinatario)->subject($asunto);
        });

        

        if (!$res) 
        {
            return view('Mensajes.plantilla')
                    ->with('var', '2')
                    ->with('mensaje', 'Error al enviar correo ')
                    ->with('ruta_boton', 'inicio')
                    ->with('mensaje_boton', 'Regresar al inicio');

        }

        Correos::create([
            'correo' => $destinatario,
            'contenido' => $mensaje,
            'asunto' => $asunto,
        ]);
        return view('Mensajes.plantilla')
                ->with('var', '1')
                ->with('mensaje', 'Correo enviado correctamente')
                ->with('ruta_boton', 'inicio')
                ->with('mensaje_boton', 'Regresar al inicio');
    }
}
