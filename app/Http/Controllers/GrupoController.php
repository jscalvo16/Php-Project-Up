<?php

namespace App\Http\Controllers;

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
        $idGrupo = $nuevoGrupo->IdGrupo;


        //Sección actualizar usuario que lo vincula al grupo

        $usuarioUno = Usuario::find($request->input('integrante1'));
        $usuarioUno->FkIdGrupo=$idGrupo;
        $usuarioUno->save();

        $usuarioDos = Usuario::find($request->input('integrante2'));
        $usuarioDos->FkIdGrupo=$idGrupo;
        $usuarioDos->save();

        $usuarioTres = Usuario::find($request->input('integrante3'));
        $usuarioTres->FkIdGrupo=$idGrupo;
        $usuarioTres->save();

        $usuarioCuatro = Usuario::find($request->input('integrante4'));
        $usuarioCuatro->FkIdGrupo=$idGrupo;
        $usuarioCuatro->save();

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

        $integrantesGrupo = Usuario::select('NombUsua', 'ApelUsua')->
        where('FkIdRol', '=', '1')->
        where('FkIdGrupo', '=', $id)->
        get();

        $grupo = GrupoDeProyecto::find($id);
        return view('fichas.integrantes', compact('integrantesGrupo'))->with("grupo", $grupo);


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
}
