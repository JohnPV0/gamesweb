<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function getLogin()
    {
        if(Auth::check()) {
            return redirect()->intended('dashboard');
        }
        return view("login");
    }

    public function postLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo email debe ser un email válido',
            'password.required' => 'El campo password es obligatorio',
        ]);
    
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        } else {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                // El usuario ha iniciado sesión correctamente
                return redirect()->intended('/inicio');
            }
        
            // Los datos son incorrectos, mostrar un mensaje de error
            return back()->withErrors([
                'email' => 'Los datos ingresados son incorrectos',
            ])->withInput();
        }
    }

    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect("login");
    }
}
