<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
use Illuminate\Support\Facades\Auth;

class MDusuariosupervisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $usuario_actual = auth()->user();
        if(isset($usuario_actual)){
            if($usuario_actual->id_tipo_usu!=2){
                return redirect('inicio');
            }
        }else
            return redirect('login');
        
        return $next($request);
    }
}
