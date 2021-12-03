<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    public function informe(Request $request){


        $idFicha=$request->input('fichas');

        $reportes = DB::table('ficha')->
        join('grupodeproyecto', 'grupodeproyecto.FkIdFicha', '=', 'ficha.IdFicha')->
        leftJoin('avance', 'avance.FkIdGrupo', '=', 'grupodeproyecto.IdGrupo')->
        select('grupodeproyecto.NombGrupo as Grupo', 'grupodeproyecto.DescriGrupo as Descripcion', 'ficha.NumbFich as Ficha', DB::raw('count(avance.IdAvan) as Avances'))->
        where('grupodeproyecto.FkIdFicha', '=', $idFicha)->
        groupBy('Grupo', 'Descripcion', 'Ficha')->
        get();

        $entregable = DB::table('entregable')->
        leftJoin('entregable_ficha','entregable_ficha.FkIdEntregable','=','entregable.IdEntre')->
        select(DB::raw('count(entregable.IdEntre) as entregable'))->
        where('entregable_ficha.FkIdFicha','=', $idFicha)->
        get();

        $ancho = 190;
        $horizontal = 85;
        $pdf = app('Fpdf');
        $pdf->AliasNbPages();



        $pdf->AddPage('L','A4');
        $pdf->Image('assets/img/logo-sena.png', 12, 12, 25);
        $pdf->SetFont('Arial', 'B', 6);
        $yy = 40;
        $y = $pdf->GetY();
        $x = 12;




        foreach ($reportes as $reporte) {
        $pdf->SetFont('helvetica', 'B', 20);
        $pdf->SetXY(0, $y + $yy);
        $pdf->Cell(300, 10, $reporte->Ficha, 0, 1, 'C');
        }

        $pdf->SetFont('courier', 'U', 15);
        $y = $pdf->GetY();
        $pdf->SetXY(0, $y);
        $pdf->Cell(300, 10, "Lista de Grupos", 0, 1, 'C');

        foreach ($entregable as $e) {
        $pdf->SetFont('courier', 'U', 10);
        $pdf->SetXY(110,50);
        $pdf->Cell(300, 10, "Total de espacios de entregables", 0, 1, 'C');
        $pdf->SetXY(110,56);
        $pdf->Cell(300, 10, $e->entregable, 0, 1, 'C');
        }

        $pdf->SetFont('Arial', 'B', 6);
        $pdf->SetY(12);
        $pdf->Cell($ancho + $horizontal, 10,'Usuario: Instructor Carlos', 0, 0, 'R');
        $pdf->SetY(15);
        $pdf->Cell($ancho + $horizontal, 10,'Fecha: '.date('d/m/Y'), 0, 0, 'R');
        $pdf->SetY(18);
        $pdf->Cell($ancho + $horizontal, 10,'Hora: '.date('H:i:s'), 0, 0, 'R');

        $pdf->setXY(35, 72);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(221, 90, 1);
        $pdf->SetTextColor(22, 19, 17);
        $pdf->Cell(110, 4, utf8_decode("Nombre del proyecto"), 'TB',0, 'C', 'Arial');
        //$pdf->Cell(50, 4, utf8_decode("Descripcion"), 'TB', 0, 'C', 'Arial');
        $pdf->Cell(110, 4, utf8_decode("Avances"), 'TB', 0, 'C', 'Arial');



        $pdf->setY(76);


        foreach ($reportes as $reporte) {
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->setX(36);
        $pdf->SetFillColor(255, 255, 255 );
        $pdf->SetTextColor(121, 6, 39);
        $pdf->Cell(120, 7, utf8_decode( $reporte-> Grupo), 'TB',0, 'C', 'Arial');
        //$pdf->MultiCell(65, 5, utf8_decode( $reporte->Descripcion), 'TB', 0, 'C','Arial');
        $pdf->setX(154);
        $pdf->Cell(100, 7, utf8_decode( $reporte->Avances),'TB', 1 ,'C','Arial');



    }
        $pdf->SetY(180);
        $pdf->SetFont('Arial', 'I', 8);
        $pdf->Cell(0, 4, utf8_decode('Página ').$pdf->PageNo().'/{nb}', 0, 0, 'C');
        $pdf->Image('assets/img/logo_login.png', 110, 177, 20);
        $pdf->SetX(0);











     return response ($pdf->Output(), 200)
     ->header('Content-Type', 'Application/pdf');

}


    }





