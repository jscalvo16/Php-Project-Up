<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    // Establecer los campos de la tabla
    protected $table = "observacion";
    protected $primaryKey = "IdObser";
    public $timestamps = false;

    public function respuestas(){

        return $this->hasMany('App\Respuesta','IdObser');
    }


}
