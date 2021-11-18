<?php

namespace App\Http\Controllers;

use App\Models\Observacion;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('avances.observaciones');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    // Método para ir a la vista de observaciones del avance
    public function mostrarObservaciones($idAvance){
        $avance = DB::table('avance')
        ->join('grupodeproyecto', 'grupodeproyecto.IdGrupo', '=', 'avance.FkIdGrupo')
        ->join('ficha', 'ficha.IdFicha', '=', 'grupodeproyecto.FkIdFicha')
        ->select('grupodeproyecto.IdGrupo', 'grupodeproyecto.NombGrupo', 'grupodeproyecto.FkIdFicha', 'avance.FkIdEntre',
        'avance.IdAvan', 'avance.DescAvan', 'avance.FechAvan', 'avance.ArchAvan', 'avance.rutaArchivoAvan', 'ficha.NumbFich')
        ->where('avance.IdAvan', '=', $idAvance)
        ->orderBy('IdAvan', 'desc')
        ->limit(1)
        ->get();

        $observaciones = Observacion::all();
        $respuestas = Respuesta::all();

        return view('avances.observaciones', compact('avance', 'observaciones', 'respuestas'));
    }

    // *--- Fin métodos personalizados ---*
}
