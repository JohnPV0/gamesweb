<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Users;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Paises;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index() {
        $paises = Paises::where('status', '1')->orderBy('nombre')->get();
        return view('register')->with('paises', $paises);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return Users::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function postRegister(Request $request) 
    {
    $validator = Validator::make($request->all(), [
        'nombre' => 'required',
        'username' => 'required|unique:users,username',
        'ap_pat' => 'required',
        'ap_mat' => 'required',
        'fecha_naci' => 'required',
        'id_pais' => 'required',
        'id_entidad' => 'required',
        'municipio_id' => 'required',
        'direccion' => 'required',
        'cp' => 'required',
        'telefono' => 'required',
        'colonia' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ], [
        'nombre.required' => 'El campo nombre es obligatorio',
        'username.required' => 'El campo username es obligatorio',
        'username.unique' => 'El username ya existe',
        'ap_pat.required' => 'El campo apellido paterno es obligatorio',
        'ap_mat.required' => 'El campo apellido materno es obligatorio',
        'fecha_naci.required' => 'El campo fecha de nacimiento es obligatorio',
        'id_pais.required' => 'El campo pais es obligatorio',
        'id_entidad.required' => 'El campo entidad es obligatorio',
        'municipio_id.required' => 'El campo municipio es obligatorio',
        'direccion.required' => 'El campo dirección es obligatorio',
        'cp.required' => 'El campo código postal es obligatorio',
        'telefono.required' => 'El campo teléfono es obligatorio',
        'colonia.required' => 'El campo colonia es obligatorio',
        'email.required' => 'El campo email es obligatorio',
        'email.email' => 'El campo email debe ser un email válido',
        'email.unique' => 'El email ya existe a una cuenta asociada',
        'password.required' => 'El campo password es obligatorio',
        'password.min' => 'El campo password debe tener al menos 8 caracteres',
    ]);

    if($validator->fails()) {
        return redirect('/register')
            ->withErrors($validator)
            ->withInput();
    } else {
        $datos = $request->all();

        $datos['password'] = Hash::make($request->input('password'));
        $datos['status'] = 1;
        $datos['id_tipo_usu'] = 4; // 4 = Cliente
        $archivo = request()->file('foto');

        if (!is_null($archivo)){
            $hora = date('h-i-s');
            $fecha = date('d-m-Y'); 
            $prefijo = $fecha."_".$hora;
            $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();
            $r1 = Storage::disk("usersfotos")->put($nombre_foto, \File::get($archivo));

            if ($r1) {
                $datos['ruta_foto_perfil'] = $nombre_foto;
                Users::create($datos);
                return redirect('/inicio');
            } else {
                return 'Error al intentar guardar la foto <br> <br> <a href="./users">Regresar</a>';
            }
        }
        $datos['ruta_foto_perfil'] = 'default_foto_perfil.jpg';
        Users::create($datos);
        return redirect('/inicio');
    }
}
}
