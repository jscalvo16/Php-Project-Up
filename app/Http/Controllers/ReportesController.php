<?php

namespace App\Http\Controllers;

use App\Http\Requests\PDFrequest;
use Illuminate\Http\Request;
use App\Models\Ficha;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function mostrarVista(){

        if(Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2){
            $fichas = DB::table('ficha')->
            leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
            select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
            where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
            get();
        }else{
            $fichas = Ficha::all();
        }

        return view('reportes.reportes')->with("fichas", $fichas);
    }
}
