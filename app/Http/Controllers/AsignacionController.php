<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all();
        //consulta para traer a los usuarios con rol instructor
        $instructor = Usuario::select('IdUsua', 'NombUsua', 'ApelUsua', 'FkIdRol')->
        where('FkIdRol', '=', 2)->
        orderBy("NombUsua", "asc")->
        get();

        //consulta para traer a los usuarios con rol aprendiz
        $apren = DB::table('usuario')->
            leftJoin('usuafich', 'usuafich.FkIdUsua', '=', 'usuario.IdUsua')->
            select('usuario.IdUsua as IdUsuario', 'usuario.NombUsua as Nombre',
            'usuario.ApelUsua as Apellido')->
            where('FkIdUsua', '=', null)->
            where('FkIdRol', '=', 1)->
            get();
        //consulta para traer todas las fichas
        $fich = Ficha::select('IdFicha', 'NumbFich')->
        get();
        return view('usuarios.asignarUsuarios', compact('instructor', 'apren', 'fich','fichas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fich = $request->input("ficha");

        $newEstu = Usuario::find($request->input('apren'));
        foreach ($newEstu as $est) {
            $est->intermedio()->attach($fich);
            $est->save();
        }

        $newInstru = Usuario::find($request->input('instruc'));
        foreach ($newInstru as $ins) {
            $ins->intermedio()->attach($fich);
            $ins->save();
        }
        return redirect('asignacion')->with('mensaje', "Usuarios asignados a la ficha con exito!");
    }

    /**
     * Display the specified resource.
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
}
