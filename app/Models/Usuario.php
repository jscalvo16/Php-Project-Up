<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Establecer los campos de la tabla
    protected $table = "usuario";
    protected $primaryKey = "IdUsua";
    public $timestamps = false;

    protected $guarded = [];

    public function respuestas()
    {

        return $this->hasMany('App\Respuesta', 'FkIdUsua');
    }

    public function observaciones()
    {

        return $this->hasMany('App\Observacion', 'FkIdUsua');
    }

    public function intermedio(){
        return $this->belongsToMany(Usuario::class, 'usuafich', 'FkIdUsua', 'FkIdFicha', 'IdUsua', 'IdFich');
    }

    public function usuaFicha(){
        return $this->hasMany('App\UsuaFichPivo', 'FkIdUsua');
    }
}
