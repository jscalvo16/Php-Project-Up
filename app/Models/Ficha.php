<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Ficha extends Model
{
    // Establecer los campos de la tabla
    protected $table = "ficha";
    protected $primaryKey = "Idficha";
    public $timestamps = false;

    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'usuafich', 'FkIdFicha', 'FkIdUsua', 'IdFicha', 'IdUsua');
    }

    public function gruposDeProyecto(){

        return $this->hasMany('App\GrupoDeProyecto','FkIdficha');
    }
}