<?php

namespace App\Http\Controllers;

use App\Http\Requests\MensajeRequest;
use App\Models\Retroalimentacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MensajesController extends Controller
{
    // Retornar a la vista del chat y todo lo relacionado a este
    public function mostrarChat($idAvance)
    {
        // Consulta para mostrar el avance sobre el cual se habla
        $avance = DB::table('avance')
        ->join('grupodeproyecto', 'grupodeproyecto.IdGrupo', '=', 'avance.FkIdGrupo')
        ->join('ficha', 'ficha.IdFicha', '=', 'grupodeproyecto.FkIdFicha')
        ->select(
            'grupodeproyecto.IdGrupo',
            'grupodeproyecto.NombGrupo',
            'grupodeproyecto.FkIdFicha',
            'avance.FkIdEntre',
            'avance.IdAvan',
            'avance.DescAvan',
            'avance.FechAvan',
            'avance.ArchAvan',
            'avance.rutaArchivoAvan',
            'ficha.NumbFich'
        )
        ->where('avance.IdAvan', '=', $idAvance)
        ->orderBy('IdAvan', 'desc')
        ->limit(1)
        ->get();

        // Consultar los mensajes de lo hablado sobre el avance
        $mensajes = DB::table('retroalimentacion')
        ->join('usuario', 'usuario.IdUsua', '=', 'retroalimentacion.FkIdUsua')
        ->select(
            'retroalimentacion.IdMensaje',
            'retroalimentacion.Mensaje',
            'retroalimentacion.FechaMensaje',
            'retroalimentacion.FkIdUsua',
            'retroalimentacion.FkIdAvan',
            'usuario.NombUsua',
            'usuario.ApelUsua',
            'usuario.IdUsua',
            'usuario.FkIdRol'
        )
        ->where('retroalimentacion.FkIdAvan', '=', $idAvance)
        ->limit(15)
        ->get();

        return view('avances.observaciones', compact('avance', 'mensajes'));
    }

    // Registrar un mensaje en la base de datos
    public function enviar(MensajeRequest $request){
        $maxVal = Retroalimentacion::all()->max('IdMensaje');
        $maxVal++;

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');

        $nuevoMensaje = new Retroalimentacion;
        $nuevoMensaje->Mensaje = $request->input('mensaje');
        $nuevoMensaje->FechaMensaje = $fecha;
        $nuevoMensaje->FkIdUsua = $request->input('usuario');
        $nuevoMensaje->FkIdAvan = $request->input('avance');

        $nuevoMensaje->save();

        $avance = $request->input('avance');

        return redirect('observacion/'.$avance);
    }
}
