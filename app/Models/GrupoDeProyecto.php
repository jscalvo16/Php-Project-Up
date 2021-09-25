<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoDeProyecto extends Model
{
    // Establecer los campos de la tabla
    protected $table = "grupodeproyecto";
    protected $primaryKey = "IdGrupo";
    public $timestamps = false;

    public function usuarios(){

        return $this->hasMany('App\Usuario','FkIdGrupo');
    }

    public function avances(){

        return $this->hasMany('App\Avance','FkIdGrupo');
    }
}
