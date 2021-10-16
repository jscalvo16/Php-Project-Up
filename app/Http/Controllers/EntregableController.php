<?php

namespace App\Http\Controllers;

use App\Models\Entregable;
use App\Models\Fase;
use App\Models\Ficha;
use App\Models\GrupoDeProyecto;
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

        //Validar si se subio un archivo y subir la ruta del archivo
        if($request->hasFile('archivo')){
            $nuevoEntre->ArchEntre = $request->file('archivo')->store('entregables');
        }

        $nuevoEntre->save();

        // Sección para vicular las fichas a los entregables
        $ficha = Ficha::find($request->input('fichas'));
        for($x=0; $x<=count($ficha); $x++){
            $ficha[$x]->entregables()->attach($maxVal);
            $ficha[$x]->save();
        }

        return redirect('entregable')->with('mensaje', 'Entregable creado y asignado correctamente');
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

    // *--- Métodos personalizados ---*

    public function mostarEntregables($idFicha, $idGrupo, $idEntre){
        // Consultar la ficha
        $ficha = Ficha::find($idFicha);

        // Consultar el grupo de proyecto
        $grupo = GrupoDeProyecto::find($idGrupo);

        // Consultar el entregable al que se accede
        $entregable = Entregable::find($idEntre);

        return view('avances.nuevoAvance', compact('ficha', 'grupo', 'entregable'));
    }

    // *--- Fin métodos personalizados ---*
}
