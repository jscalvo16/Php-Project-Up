<?php

namespace App\Imports;

use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsuariosCarga implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Usuario([
            'IdUsua' => $row["id"],
            'NombUSua' => $row["nombre"],
            'ApelUsua' =>$row["apellido"],
            'TipoDocUsua' => $row["doc"],
            'NumbDocUsua' => $row["numero"],
            'FechNaciUsua' =>Carbon::parse($row["fecha"])->format('Y-m-d'),
            'email' => $row["email"],
            'password' => Hash::make($row["numero"]),
            'EstaUsua' => $row["estado"],
            'FkIdRol' => $row["rol"]
        ]);
    }
}
