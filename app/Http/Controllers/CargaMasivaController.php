<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use PHPExcel_IOFactory;
use PhpOffice\PhpSpreadsheet\IOFactory;
require_once 'Classes/PHPExcel.php';

class CargaMasivaController extends Controller
{
    public function cargaM(Request $request)
    {


        $archivo = $request->file('archivo');
        $excel = PHPExcel_IOFactory::load($archivo);

        $excel -> setActiveSheetIndex(0);

        $filaNumb = $excel->setActiveSheetIndex(0)->getHighestRow();

        for($i=2;$i<=$filaNumb;$i++){
            $maxVal = Usuario::all()->max('IdUsua');
            $maxVal++;

            $user = new Usuario;
            $user -> NombUsua = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
            $user -> ApelUsua = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
            $user -> TipoDocUsua = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
            $user -> NumbDocUsua = $excel->getActiveSheet()->getCell('D'.$i)->getValue();
            $user -> FechNaciUsua = $excel->getActiveSheet()->getCell('E'.$i)->getValue();
            $user -> email = $excel->getActiveSheet()->getCell('F'.$i)->getValue();
            $user -> password = $excel->getActiveSheet()->getCell('D'.$i)->getValue();
            $user -> FkIdRol = $excel->getActiveSheet()->getCell('G'.$i)->getValue();
            $user -> EstaUsua = $excel->getActiveSheet()->getCell('H'.$i)->getValue();

            $user->save();


        }
    }
}

