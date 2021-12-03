<?php

namespace App\Exports;

use App\Models\Ficha;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class FichaExport implements FromCollection,WithHeadings,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Nombre',
            'Descripcion',
            'Ficha',
            'Avances',
        ];
    }


    protected $idFicha;

    function __construct($idFicha)
    {
        $this->idFicha = $idFicha;
    }

    public function collection()
    {
        $reportes=DB::table('ficha')->
        join('grupodeproyecto', 'grupodeproyecto.FkIdFicha', '=', 'ficha.IdFicha')->
        leftJoin('avance', 'avance.FkIdGrupo', '=', 'grupodeproyecto.IdGrupo')->
        select('grupodeproyecto.NombGrupo as Grupo', 'grupodeproyecto.DescriGrupo as Descripcion', 'ficha.NumbFich as Ficha', DB::raw('count(avance.IdAvan) as Avances'))->
        where('grupodeproyecto.FkIdFicha', '=',  $this->idFicha)->
        groupBy('Grupo', 'Descripcion', 'Ficha')->
        get();

        return $reportes;
    }
    public function registerEvents(): array
    {
        return[
            AfterSheet::class => function(AfterSheet $event){
                $event->sheet->getStyle('A1:D1')->applyFromArray([
                    'font'=>[
                        'bold' => true
                    ],
                    'borders' => [
                            'outline' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FFFF0000'],
                            ],
                            'fill'=>[
                                'color'=>['argb' => 'FFFF0000']
                            ],
                        ]
                ]);
            }
        ];
    }
}
