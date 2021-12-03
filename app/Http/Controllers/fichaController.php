<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichaEditarRequest;
use App\Models\Ficha;
use App\Models\GrupoDeProyecto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\FichaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class fichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        return view('fichas.gestionFichas', compact('fichas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        return view('fichas.nuevaFicha', compact('fichas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FichaRequest $request)
    {
        $valorMax = Ficha::all()->max('IdFich a');
        $valorMax++;

        $newFich = new Ficha;

        $newFich->NumbFich = $request->input("numFicha");
        $newFich->InicEtapElec = $request->input("inicioEtapa");
        $newFich->FinEtapElec = $request->input("finEtapa");
        $newFich->JornFicha = $request->input("jornada");
        $newFich->Trimestre = $request->input("trimestre");
        $newFich->save();

        return redirect("ficha")->with("MensajeFicha", "Ficha creada correctamente ");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fich = Ficha::find($id);

        // Consulta para los grupos de proyecto de la ficha
        $gruposFicha = GrupoDeProyecto::select('IdGrupo', 'NombGrupo', 'DescriGrupo')->
        where('FkIdFicha', '=', $id)->
        get();

        //Consulta para los instructores de la ficha
        $instructores = Ficha::find($id)->usuarios()->
        select('NombUsua','ApelUsua')->where('FkIdRol','=','2')->
        get();

        //Consulta para los aprendices de la ficha
        $aprendices = Ficha::find($id)->usuarios()->
        select('IdUsua','NombUsua','ApelUsua','email','NumbDocUsua','FechNaciUsua','EstaUsua','FkIdGrupo')->
        where('FkIdRol','=','1')->
        get();

        //Consulta para los coordinadores de la ficha
        $coordinador = Ficha::find($id)->usuarios()->
        select('NombUsua','ApelUsua')->
        where('FkIdRol','=','3')->
        get();

        if(Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2){
            $fichas = DB::table('ficha')->
            leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
            select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
            where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
            get();
        }else{
            $fichas = Ficha::all();
        }

        return view('fichas.fichas', compact('gruposFicha', 'instructores', 'aprendices', 'coordinador', 'fichas'))->with("fich", $fich);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fich = Ficha::find($id);

        if(Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2){
            $fichas = DB::table('ficha')->
            leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
            select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
            where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
            get();
        }else{
            $fichas = Ficha::all();
        }

        return view('fichas.editarFicha', compact('fichas'))->with("ficha", $fich);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FichaEditarRequest $request, $id)
    {
        $fich = Ficha::find($id);

        $fich->NumbFich = $request->input("numFicha");
        $fich->InicEtapElec = $request->input("inicioEtapa");
        $fich->FinEtapElec = $request->input("finEtapa");
        $fich->JornFicha = $request->input("jornada");
        $fich->Trimestre = $request->input("trimestre");

        $fich->save();

        return redirect("ficha")->with("MensajeFicha", "Información actualizada correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
