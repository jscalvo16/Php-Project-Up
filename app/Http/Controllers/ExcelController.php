<?php

namespace App\Http\Controllers;

use App\Exports\FichaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export(Request $request){
        return Excel::download(new FichaExport($request->input('fichas')), 'ficha.xlsx');

    }
}
