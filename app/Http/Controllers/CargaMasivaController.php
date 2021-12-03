<?php

namespace App\Http\Controllers;

use App\Mail\CambiarContrasenaMail;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpSpreadsheet\IOFactory;

class CargaMasivaController extends Controller
{
    public function cargaM(Request $request)
    {

        $archivo = $request->file('archivo');
        $excel = IOFactory::load($archivo);

        // $excel -> setActiveSheetIndex(0);

        $filaNumb = $excel->setActiveSheetIndex(0)->getHighestRow();

        // dd($filaNumb);

        for($i=2;$i<=$filaNumb;$i++){
            $maxVal = Usuario::all()->max('IdUsua');
            $maxVal++;

            $user = new Usuario;
            $user -> NombUsua = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
            $user -> ApelUsua = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
            $user -> TipoDocUsua = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
            $user -> NumbDocUsua = $excel->getActiveSheet()->getCell('D'.$i)->getValue();
            $user -> FechNaciUsua = Carbon::parse($excel->getActiveSheet()->getCell('E'.$i)->getValue())->format('Y-m-d');
            $user -> email = $excel->getActiveSheet()->getCell('F'.$i)->getValue();
            $user -> password = Hash::make($excel->getActiveSheet()->getCell('D'.$i)->getValue());
            $user -> FkIdRol = $excel->getActiveSheet()->getCell('G'.$i)->getValue();
            $user -> EstaUsua = $excel->getActiveSheet()->getCell('H'.$i)->getValue();

            Mail::to($excel->getActiveSheet()->getCell('F'.$i)->getValue())->send(new CambiarContrasenaMail($maxVal));
            $user->save();
        }

        return redirect('users')->with("mensaje", "Carga Exitosa");
    }
}

