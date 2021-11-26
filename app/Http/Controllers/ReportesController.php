<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function mostrarVista(){
        return view('reportes.reportes');
    }
}
