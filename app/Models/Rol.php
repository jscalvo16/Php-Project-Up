<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table="rol";
    protected $primaryKey="IdRol";
    public $timestamps=false;

    public function usuarios(){

        return $this->hasMany('App\Usuario','FkIdRol');
    }


}
