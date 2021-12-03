<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\GrupoDeProyecto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\FichaRequest;

class fichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fich = Ficha::all();
        return view('fichas.gestionFichas')->with('fichas', $fich);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fichas = Ficha::all();
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

        $fichas = Ficha::all();

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

        $fichas = Ficha::all();

        return view('fichas.editarFicha', compact('fichas'))->with("ficha", $fich);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FichaRequest $request, $id)
    {
        $fich = Ficha::find($id);

        $fich->NumbFich = $request->input("numFicha");
        $fich->InicEtapElec = $request->input("inicioEtapa");
        $fich->FinEtapElec = $request->input("finEtapa");
        $fich->JornFicha = $request->input("jornada");

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
