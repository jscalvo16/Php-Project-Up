<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class indexController extends Controller
{
    // Mostrar index principal del proyecto
    public function mostrarIndex()
    {
        return view('index');
    }

    // Mostrar el perfil del usuario
    public function mostrarPerfil()
    {
        $fichas = Ficha::all();
        return view('usuarios.perfil', compact('fichas'));
    }
}
