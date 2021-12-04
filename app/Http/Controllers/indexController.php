<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        if(Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2){
            $fichas = DB::table('ficha')->
            leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
            select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
            where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
            get();
        }else{
            $fichas = Ficha::all();
        }

        return view('usuarios.perfil', compact('fichas'));
    }
}
