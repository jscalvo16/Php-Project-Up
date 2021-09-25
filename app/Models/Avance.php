<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $table = "avance";
    protected $primaryKey = "IdAvan";
    public $timestamps = false;

    public function observaciones(){

        return $this->hasMany('App\Observacion','FkIdAvan');
    }
}
