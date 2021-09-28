<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Usuario;
use Illuminate\Http\Request;

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
        return view('fichas.nuevaFicha');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valorMax = Ficha::all()->max('IdFicha');
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
        return view('fichas.fichas')->with("fich", $fich);
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

        return view('fichas.editarFicha')->with("ficha", $fich);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fich = Ficha::find($id);

        $fich->NumbFich = $request->input("numFicha");
        $fich->InicEtapElec = $request->input("inicioEtapa");
        $fich->FinEtapElec = $request->input("finEtapa");
        $fich->JornFicha = $request->input("jornada");

        $fich ->save();

        return redirect("ficha")->with("MensajeFicha","Información actualizada correctamente");
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
