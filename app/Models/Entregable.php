<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregable extends Model
{
    protected $table = "entregable";
    protected $primaryKey = "IdEntre";
    public $timestamps = false;

    public function avances(){

        return $this->hasMany('App\Avance','FkIdEntre');
    }
}
