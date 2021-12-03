<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    // Establecer los campos de la tabla
    protected $table = "plantilla";
    protected $primaryKey = "IdPlantilla";
    public $timestamps = false;
}
