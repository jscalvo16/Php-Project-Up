<?php

namespace App\Http\Controllers;


use App\Http\Requests\GrupoRequest;

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
    public function store(GrupoRequest $request)
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
        $usuarioUno->FkIdGrupo = $idGrupo;
        $usuarioUno->save();

        $usuarioDos = Usuario::find($request->input('integrante2'));
        $usuarioDos->FkIdGrupo = $idGrupo;
        $usuarioDos->save();

        $usuarioTres = Usuario::find($request->input('integrante3'));
        $usuarioTres->FkIdGrupo = $idGrupo;
        $usuarioTres->save();

        $usuarioCuatro = Usuario::find($request->input('integrante4'));
        $usuarioCuatro->FkIdGrupo = $idGrupo;
        $usuarioCuatro->save();

        //validacion de select´s

        if ($request->input('integrante1') == $request->input('integrante2') && $request->input('integrante1') == $request->input('integrante3') && $request->input('integrante1') == $request->input('integrante4')) {
            $message = "El aprendiz ya ha sido seleccionado";
        } elseif ($request->input('integrante2') == $request->input('integrante3') && $request->input('integrante2') == $request->input('integrante4')) {
            $message = "El aprendiz ya ha sido seleccionado";
        } elseif ($request->input('integrante3') == $request->input('integrante4')) {
            $message = "El aprendiz ya ha sido seleccionado";
        }

        return redirect('ficha/' . $request->input('idFicha'))->with('mensaje', 'Grupo creado exitosamente')
            ->with('message', $message);

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
    public function update(GrupoRequest $request, $id)
    {
        $Grupo = GrupoDeProyecto::find($id);

        //Sección actualizar  grupo


        $Grupo->NombGrupo = $request->input('nombreProyecto');
        $Grupo->DescriGrupo = $request->input('descProyecto');
        $Grupo->AlcanGrupo = $request->input('alcProyecto');
        $Grupo->FkIdFicha = $request->input('idFicha');
        $Grupo->save();
        $idGrupo = $Grupo->IdGrupo;
        //Sección actualizar usuario que lo vincula al grupo

        $usuarioUno = Usuario::find($request->input('integrante1'));
        $usuarioUno->FkIdGrupo = $idGrupo;
        $usuarioUno->save();

        $usuarioDos = Usuario::find($request->input('integrante2'));
        $usuarioDos->FkIdGrupo = $idGrupo;
        $usuarioDos->save();

        $usuarioTres = Usuario::find($request->input('integrante3'));
        $usuarioTres->FkIdGrupo = $idGrupo;
        $usuarioTres->save();

        $usuarioCuatro = Usuario::find($request->input('integrante4'));
        $usuarioCuatro->FkIdGrupo = $idGrupo;
        $usuarioCuatro->save();

        //validacion de select´s

        if ($request->input('integrante1') == $request->input('integrante2') && $request->input('integrante1') == $request->input('integrante3') && $request->input('integrante1') == $request->input('integrante4')) {
            $message = "El aprendiz ya ha sido seleccionado";
        } elseif ($request->input('integrante2') == $request->input('integrante3') && $request->input('integrante2') == $request->input('integrante4')) {
            $message = "El aprendiz ya ha sido seleccionado";
        } elseif ($request->input('integrante3') == $request->input('integrante4')) {
            $message = "El aprendiz ya ha sido seleccionado";
        }

        return redirect('ficha/' . $request->input('idFicha').'/grupo/'.$Grupo->IdGrupo)->with('mensaje', 'Grupo actualizado exitosamente')
            ->with('message', $message);
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
    public function mostrarGrupoFicha($idFicha, $idGrupo)
    {
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
