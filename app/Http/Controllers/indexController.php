<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    // Mostrar index principal del proyecto
    public function mostrarIndex() {
        return view('index');
    }
}
