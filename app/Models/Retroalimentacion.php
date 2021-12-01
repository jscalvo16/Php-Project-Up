<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retroalimentacion extends Model
{
    // Establecer los campos de la tabla
    protected $table = "retroalimentacion";
    protected $primaryKey = "IdMensaje";
    public $timestamps = false;

    public function respuestas(){

        return $this->hasMany('App\Respuesta','FkIdObser');
    }


}
