<?php

namespace App\Http\Controllers;

use App\Models\Plantilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlantillaController extends Controller
{
    // Método para descargar la plantilla
    public function descargarAvance() {
        $plantilla = Plantilla::find(1);
        $nombreArchivo = $plantilla->NombreArchivo;
        $rutaArchivo = $plantilla->RutaArchivo;

        $headers = [
            'Content-Type' => 'platilladeapoyo',
        ];

        return Storage::download($rutaArchivo, $nombreArchivo, $headers);
    }
}
