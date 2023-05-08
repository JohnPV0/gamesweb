<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\DescargasController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\Fotos_juegosController;
use App\Http\Controllers\Juegos_plataformasController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\PlataformasController;
use App\Http\Controllers\Tipos_pagoController;
use App\Http\Controllers\Tipos_usuarioController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Ventas_detallesController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\AjaxController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AjaxController::class,'verJuegos']);
Route::get('/home', [AjaxController::class,'verJuegos']);
Route::get('/agregar_carrito/{id_juego}/{id_plataforma}', [AjaxController::class, 'agregarCarrito']);
Route::get('/ver_carrito', [AjaxController::class, 'verCarrito']);
Route::get('/add_del_producto/{accion}/{id_juego}/{id_plataforma}', [AjaxController::class, 'addDelProducto']);

Route::get('/cruds', function () {
    return view('cruds');
});



Route::resource('categorias', CategoriasController::class);
Route::resource('comentarios', ComentariosController::class);
Route::resource('descargas', DescargasController::class);
Route::resource('entidades', EntidadesController::class);
Route::resource('fotos_juegos', Fotos_juegosController::class);
Route::resource('juegos_plataformas', Juegos_plataformasController::class);
Route::resource('juegos', JuegosController::class);
Route::resource('municipios', MunicipiosController::class);
Route::resource('paises', PaisesController::class);
Route::resource('plataformas', PlataformasController::class);
Route::resource('tipos_pago', Tipos_pagoController::class);
Route::resource('tipos_usuario', Tipos_usuarioController::class);
Route::resource('users', UsersController::class);
Route::resource('ventas_detalles', Ventas_detallesController::class);
Route::resource('ventas', VentasController::class);

Route::get('/contacto', [CorreoController::class, 'contacto']);
Route::post('/contacto/enviar', [CorreoController::class, 'enviar']);

Route::get('/cargar_entidades/{id_pais}', [EntidadesController::class, 'cargarEntidades']);

Route::get('/cargar_municipios/{id_entidad}', [MunicipiosController::class, 'cargarMunicipios']);

Route::get('/login', [UsersController::class, 'login']);


