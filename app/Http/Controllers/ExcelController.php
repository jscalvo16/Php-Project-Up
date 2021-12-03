<?php

namespace App\Http\Controllers;

use App\Exports\FichaExport;
use App\Http\Requests\ExcelRequest;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export(ExcelRequest $request){
        $ficha = Ficha::find($request->input('ficha'));

        $numero = $ficha->NumbFich;

        return Excel::download(new FichaExport($request->input('ficha')), 'Ficha '.$numero.'.xlsx');
    }
}
