<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Mostrar el formulario del login
    public function mostrarLogin(){
        return view('autenticacion.login');
    }

    // Método para la autenticación por login
    public function login(){
        //
    }

    // Método para cerrar sesión
    public function logout(){
        //
    }
}
