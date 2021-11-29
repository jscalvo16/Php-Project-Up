<?php

namespace App\Http\Livewire;

use App\Models\Observacion;
use App\Models\Respuesta;
use Illuminate\Support\Facades\DB;


use Livewire\Component;


class ChatForm extends Component
{
    public function mount()
    {
    }


    public function render()

    {
    }

    public function mostrarObservaciones($idAvance)
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

        // Consultar las observaciones del avance
        $observaciones = Observacion::select('IdObser', 'ContObser', 'FechObse', 'FkIdUsua', 'FkIdAvan')->where('FkIdAvan', '=', $idAvance)->get();

        // Arreglo para almacenar todas las respuestas de la observación
        $respuestas = [];

        // Consultar las respuesta de esa observación
        foreach($observaciones as $observacion){
            $respuesta = Respuesta::select('IdResp', 'ContResp', 'FechResp', 'FkIdObser', 'FkIdUsua')
            ->where('FkIdObser', '=', $observacion->IdObser)
            ->get();
            array_push($respuestas, $respuesta);
        }

        //var_dump($respuestas);

        // Enviar los mensajes para la intersección del chat - No sirve :(
        $mensajes = [
            'observaciones' => $observaciones,
            'respuestas' => $respuestas
        ];

        //var_dump($mensajes);

        return view('avances.observaciones', compact('avance', 'observaciones', 'respuestas', 'mensajes'));
    }
}
