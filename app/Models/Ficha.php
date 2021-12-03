<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Ficha extends Model
{
    // Establecer los campos de la tabla
    protected $table = "ficha";
    protected $primaryKey = "IdFicha";
    public $timestamps = false;

    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'usuafich', 'FkIdFicha', 'FkIdUsua', 'IdFicha', 'IdUsua');
    }

    public function gruposDeProyecto(){
        return $this->hasMany('App\GrupoDeProyecto','FkIdFicha');
    }


    public function entregables(){
        return $this->belongsToMany(Entregable::class, 'entregable_ficha', 'FkIdFicha', 'FkIdEntregable', 'IdFicha', 'IdEntre');
    }

    public function fichaUsua(){
        return $this->hasMany('App\UsuaFichPivo','FkIdFicha');
    }
}
