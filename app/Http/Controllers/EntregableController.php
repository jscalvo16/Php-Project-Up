<?php

namespace App\Http\Controllers;

use App\Models\Entregable;
use App\Models\Fase;
use App\Models\Ficha;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EntregableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fichaEntre = Ficha::with('entregables')->
        get();

        return view('entregables.gestionEntregables')->with('infoEntre', $fichaEntre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Consultar las fases
        $fases = Fase::all();

        // Consultar fichas para elegir
        $fichas = Ficha::all();

        // Consultar los instructores de la ficha
        $instructores = Usuario::select('IdUsua', 'NombUsua','ApelUsua')->
        where('FkIdRol','=','2')->
        get();

        return view('entregables.nuevoEntregable', compact('fases', 'fichas', 'instructores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Sección para crear el entregable
        $maxVal = Entregable::all()->max('IdEntre');
        $maxVal++;

        $nuevoEntre = new Entregable;
        $nuevoEntre->TituEntre = $request->input('tituloEntre');
        $nuevoEntre->TrimEntre = $request->input('trimestre');
        $nuevoEntre->DescEntre = $request->input('descEntre');
        $nuevoEntre->FechIniEntre = $request->input('fechaInicio');
        $nuevoEntre->FechFin = $request->input('fechaFin');
        $nuevoEntre->ArchEntre = $request->input('archivo');
        $nuevoEntre->IdInstruSeg = $request->input('instructor');
        $nuevoEntre->FkIdFase = $request->input('fases');

        $nuevoEntre->save();

        return redirect('ficha/'. $request->input('ficha') .'/entregables')->with('mensaje', 'Entregable creado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Métodos personalizados
    /* public function entregablesFicha($id){
        // Consultar la ficha
        $ficha = Ficha::find($id);

        // Consulta de los entregables de la ficha
        $infoEntre = Ficha::find($id)->
        entregables()->
        select('IdEntre', 'TituEntre', 'TrimEntre', 'DescEntre', 'FechIniEntre', 'FechFin', 'ArchEntre', 'IdInstruSeg', 'FkIdFase')->
        get();

        return view('entregables.gestionEntregables', compact('ficha', 'infoEntre'));
    }

    public function crearForm($id){
        // Consultar la ficha
        $ficha = Ficha::find($id);

        // Consultar las fases
        $fases = Fase::all();

        // Consultar los instructores de la ficha
        $instructores = Ficha::find($id)->usuarios()->
        select('IdUsua', 'NombUsua','ApelUsua')->where('FkIdRol','=','2')->
        get();

        return view('entregables.nuevoEntregable', compact('ficha', 'fases', 'instructores'));
    }

    public function editarForm($idFicha, $idEntre){
        // Consultar la ficha
        $ficha = Ficha::find($idFicha);

        // Consultar las fases
        $fases = Fase::all();

        // Consultar los instructores de la ficha
        $instructores = Ficha::find($idFicha)->usuarios()->
        select('IdUsua', 'NombUsua','ApelUsua')->where('FkIdRol','=','2')->
        get();

        // Consultar entregable seleccionado
        $entre = Entregable::find($idEntre);

        return view('entregables.editarEntregable', compact('ficha', 'fases', 'instructores', 'entre'));
    } */
    // Fin métodos personalizados

}
