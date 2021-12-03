<?php

namespace App\Http\Controllers;

use App\Http\Requests\PDFrequest;
use Illuminate\Http\Request;
use App\Models\Ficha;

class ReportesController extends Controller
{
    public function mostrarVista(){
        $fichas=Ficha::all();
        return view('reportes.reportes')->with("fichas",$fichas);
    }
}
