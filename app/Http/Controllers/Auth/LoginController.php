<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // Mostrar el formulario del login
    public function mostrarLogin(){
        return view('autenticacion.login');
    }

    // Método para la autenticación por login
    public function login(Request $request){
        if(Auth::attempt([
            "email"=> $request->input("correo"),
            "password"=> $request->input("contrasena"),

        ])){

            return redirect('users');
        }else{
            return redirect('login')->with("credenciales_invalidas", "Credenciales no validas");
        }

    }


    // Método para cerrar sesión
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
