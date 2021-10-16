<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\GrupoDeProyecto;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maxId = GrupoDeProyecto::all()->max('IdGrupo');
        $maxId++;

        //Sección crear grupo

        $nuevoGrupo = new GrupoDeProyecto;
        $nuevoGrupo->NombGrupo = $request->input('nombreProyecto');
        $nuevoGrupo->DescriGrupo = $request->input('descProyecto');
        $nuevoGrupo->AlcanGrupo = $request->input('alcProyecto');
        $nuevoGrupo->FkIdFicha = $request->input('idFicha');
        $nuevoGrupo->save();

        //Sección actualizar usuario para que se vincule al grupo
        $asignarGrupo = Usuario::find($request->input('integrante'));
        $asignarGrupo->FkIdGrupo=$maxId;

        $asignarGrupo->save();

        return redirect('ficha/' . $request->input('idFicha'))->with('mensaje', 'Grupo creado exitosamente');
    }

    /**
     * Muestra el grupo seleccionado por el id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    // *--- Métodos personalizados ---*
    public function mostrarGrupoFicha($idFicha, $idGrupo){
        // Consultar el grupo de proyecto
        $grupo = GrupoDeProyecto::find($idGrupo);

        // Consultar los entregbles de la ficha
        $entregables = Ficha::find($idFicha)->
        entregables()->
        select('IdEntre', 'TituEntre', 'DescEntre', 'TrimEntre', 'FkIdFase')->
        get();

        // Consultar los usuarios que pertenecen al grupo
        $integrantesGrupo = Usuario::select('NombUsua', 'ApelUsua')->
        where('FkIdRol', '=', '1')->
        where('FkIdGrupo', '=', $idGrupo)->
        get();

        //Consultar la ficha
        $ficha = Ficha::find($idFicha);

        return view('fichas.integrantes', compact('grupo', 'entregables', 'integrantesGrupo', 'ficha'));
    }

    // *--- Fin métodos personalizados ---*
}
