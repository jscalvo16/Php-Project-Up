<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvanceRequest;
use App\Models\Avance;
use App\Models\Ficha;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Consultar el avance y lo relacionado a este
        if(Auth::user()->FkIdRol == 1) {
            $avances = DB::table('avance')->
            join('grupodeproyecto', 'grupodeproyecto.IdGrupo', '=', 'avance.FkIdGrupo')->
            join('ficha', 'ficha.IdFicha', '=', 'grupodeproyecto.FkIdFicha')->
            select('grupodeproyecto.IdGrupo', 'grupodeproyecto.NombGrupo', 'grupodeproyecto.FkIdFicha', 'avance.FkIdEntre', 'avance.IdAvan', 'avance.DescAvan', 'avance.FechAvan', 'avance.ArchAvan', 'avance.rutaArchivoAvan', 'ficha.NumbFich')->
            where('grupodeproyecto.IdGrupo', '=', Auth::user()->FkIdGrupo)->
            get();
        }else{
            $avances = DB::table('avance')
            ->join('grupodeproyecto', 'grupodeproyecto.IdGrupo', '=', 'avance.FkIdGrupo')
            ->join('ficha', 'ficha.IdFicha', '=', 'grupodeproyecto.FkIdFicha')
            ->select('grupodeproyecto.IdGrupo', 'grupodeproyecto.NombGrupo', 'grupodeproyecto.FkIdFicha', 'avance.FkIdEntre',
            'avance.IdAvan', 'avance.DescAvan', 'avance.FechAvan', 'avance.ArchAvan', 'avance.rutaArchivoAvan', 'ficha.NumbFich')
            ->get();
        }

        if(Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2){
            $fichas = DB::table('ficha')->
            leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
            select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
            where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
            get();
        }else{
            $fichas = Ficha::all();
        }

        return view('avances.avances', compact('fichas'))->with('avances', $avances);
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
    public function store(AvanceRequest $request)
    {
        $maxId = Avance::all()->max('IdAvan');
        $maxId++;

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');

        $nuevoAvance = new Avance;
        $nuevoAvance->DescAvan = $request->input('descAvance');
        $nuevoAvance->FechAvan = $fecha;
        $nuevoAvance->FkIdEntre = $request->input('entregable');
        $nuevoAvance->FkIdGrupo = $request->input('grupo');

        //Validar si se subio un archivo
        if($request->hasFile('avance')) {
            $nombre = $request->file('avance')->getClientOriginalName();
            $rutaArchivo = $request->file('avance')->storeAs('avances', $nombre);
            $nuevoAvance->ArchAvan = $nombre;
            $nuevoAvance->rutaArchivoAvan = $rutaArchivo;
        }

        $nuevoAvance->save();

        $ficha = $request->input('ficha');
        $grupo = $request->input('grupo');
        $entregable = $request->input('entregable');

        return redirect('ficha/'.$ficha.'/grupo/'.$grupo.'/entregable/'.$entregable)->with('mensaje', 'Documento subido correctamente');
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
        $avance = Avance::find($id);

        // Consultar el avance y lo relacionado a este por id
        /*$avance = DB::table('avance')
        ->join('grupodeproyecto', 'grupodeproyecto.IdGrupo', '=', 'avance.FkIdGrupo')
        ->join('ficha', 'ficha.IdFicha', '=', 'grupodeproyecto.FkIdFicha')
        ->select('grupodeproyecto.IdGrupo', 'grupodeproyecto.NombGrupo', 'grupodeproyecto.FkIdFicha', 'avance.FkIdEntre',
        'avance.IdAvan', 'avance.DescAvan', 'avance.FechAvan', 'avance.ArchAvan', 'avance.rutaArchivoAvan', 'ficha.NumbFich')
        ->where('avance.IdAvan', '=', $id)
        ->get();
        */

        if(Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2){
            $fichas = DB::table('ficha')->
            leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
            select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
            where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
            get();
        }else{
            $fichas = Ficha::all();
        }

        return view('avances.editarAvance', compact('fichas'))->with('avance', $avance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AvanceRequest $request, $id)
    {
        $modificarAvan = Avance::find($id);

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');

        $modificarAvan->DescAvan = $request->input('descAvance');
        $modificarAvan->FechAvan = $fecha;
        $modificarAvan->FkIdEntre = $request->input('entregable');
        $modificarAvan->FkIdGrupo = $request->input('grupo');

        //Validar si se subio un archivo
        if($request->hasFile('avance')) {
            $nombre = $request->file('avance')->getClientOriginalName();
            $rutaArchivo = $request->file('avance')->storeAs('avances', $nombre);
            $modificarAvan->ArchAvan = $nombre;
            $modificarAvan->rutaArchivoAvan = $rutaArchivo;
        }

        $modificarAvan->save();

        return redirect('avance')->with('mensaje', 'Documento modificado exitosamente');
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

    // *--- M??todos personalizados ---*

    // M??todo para descargar un avance
    public function descargarAvance($idAvan) {
        $avance = Avance::find($idAvan);
        $nombreArchivo = $avance->ArchAvan;
        $rutaArchivo = $avance->rutaArchivoAvan;

        $headers = [
            'Content-Type' => 'archivodeevidencia',
        ];

        return Storage::download($rutaArchivo, $nombreArchivo, $headers);
    }

    // *--- Fin m??todos personalizados ---*
}
