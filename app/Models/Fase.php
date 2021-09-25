<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    // Establecer los campos de la tabla
    protected $table = "fase";
    protected $primaryKey = "IdFase";
    public $timestamps = false;

    public function entregables(){

        return $this->hasMany('App\Entregable','FkIdFase');
    }
}
