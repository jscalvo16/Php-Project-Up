<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;

class ReportesController extends Controller
{
    public function mostrarVista(){
        $fichas=Ficha::all();
        return view('reportes.reportes')
        ->with("fichas",$fichas);
    }

    public function GenerarPDF(Request $request){
        $idFicha=$request->input('fichas');

        return redirect('Controllers.PDFController', compact('idFicha'));

    }

}
