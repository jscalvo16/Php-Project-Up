<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntregableRequest;
use App\Models\Entregable;
use App\Models\Fase;
use App\Models\Ficha;
use App\Models\GrupoDeProyecto;
use App\Models\Usuario;
use App\Models\Avance;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(EntregableRequest $request)
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
        $nuevoEntre->IdInstruSeg = $request->input('instructor');
        $nuevoEntre->FkIdFase = $request->input('fases');

        //Validar si se subio un archivo
        if($request->hasFile('archivo')){
            $nombre = $request->file('archivo')->getClientOriginalName();
            $nuevoEntre->rutaArchivoEntre = $request->file('archivo')->storeAs('entregables', $nombre);
            $nuevoEntre->ArchEntre = $nombre;
        }

        $nuevoEntre->save();

        // Sección para vicular las fichas a los entregables
        $ficha = Ficha::find($request->input('fichas'));
        foreach ($ficha as $f){
            $f->entregables()->attach($maxVal);
            $f->save();
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
        // Buscar entregable por id
        $entregable = Entregable::find($id);

        // Consultar las fases
        $fases = Fase::all();

        // Consultar fichas para elegir
        $fichas = Ficha::all();

        // Consultar los instructores de la ficha
        $instructores = Usuario::select('IdUsua', 'NombUsua','ApelUsua')->
        where('FkIdRol','=','2')->
        get();

        // Consultar las fichas en donde pertenece el entregable
        $fichaEntre = Entregable::find($id)->
        fichas()->
        select('NumbFich')->
        get();

        return view('entregables.editarEntregable', compact('entregable', 'fases', 'fichas', 'instructores', 'fichaEntre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EntregableRequest $request, $id)
    {
        // Sección para editar el entregable
        $editEntre = Entregable::find($id);

        $editEntre->TituEntre = $request->input('tituloEntre');
        $editEntre->TrimEntre = $request->input('trimestre');
        $editEntre->DescEntre = $request->input('descEntre');
        $editEntre->FechIniEntre = $request->input('fechaInicio');
        $editEntre->FechFin = $request->input('fechaFin');
        $editEntre->IdInstruSeg = $request->input('instructor');
        $editEntre->FkIdFase = $request->input('fases');

        //Validar si se subio un archivo y subir la ruta del archivo
        if($request->hasFile('archivo')){
            $nombre = $request->file('archivo')->getClientOriginalName();
            $request->file('archivo')->storeAs('entregables', $nombre);
            $editEntre->rutaArchivoEntre = $request->file('archivo')->storeAs('entregables', $nombre);
            $editEntre->ArchEntre = $nombre;
        }

        $editEntre->save();

        // Sección para vicular las fichas a los entregables
        $ficha = Ficha::find($request->input('fichas'));
        foreach ($ficha as $f){
            $f->entregables()->attach($editEntre);
            $f->save();
        }

        return redirect('entregable')->with('mensaje', 'Entregable editado y asignado correctamente');
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

        // Consultar los avances del grupo y del entregable
        $avance = Avance::select('IdAvan', 'DescAvan', 'FechAvan', 'ArchAvan', 'FkIdEntre', 'FkIdGrupo')->
        where('FkIdEntre', '=', $idEntre)->
        where('FkIdGrupo', '=', $idGrupo)->
        orderBy('IdAvan', 'desc')->
        limit(1)->
        get();

        return view('avances.nuevoAvance', compact('ficha', 'grupo', 'entregable', 'avance'));
    }

    // Método para descargar el entregable
    public function descargarArchivo($id){
        $entregable = Entregable::find($id);
        $nombreArchivo = $entregable->ArchEntre;
        $rutaArchivo = $entregable->rutaArchivoEntre;

        $headers = [
            'Content-Type' => 'archivodeapoyo',
        ];

        return Storage::download($rutaArchivo, $nombreArchivo, $headers);
    }

    // *--- Fin métodos personalizados ---*
}
