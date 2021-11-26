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
        $observaciones = Observacion::select('IdObser', 'ContObser', 'FechObse', 'FkIdUsua', 'FkIdAvan')->
        where('FkIdAvan', '=', $idAvance)->
        get();

        $respuestas=[];


        for($x=1; $x<=count($observaciones);$x++){
        $respuesta = [
            Respuesta::select('IdResp', 'ContResp', 'FechResp', 'FkIdObser', 'FkIdUsua')->
        where('FkIdObser', '=', $x)->
        get()
        ];
        array_push($respuestas, $respuesta);
        var_dump($respuestas);

    }


        $mensajes=[
            $observaciones,
            $respuesta
        ];




        return view('avances.observaciones', compact('avance', 'observaciones', 'respuestas','mensajes'));
    }
}
