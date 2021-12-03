<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuaFichPivo extends Model
{
    protected $table = "UsuaFicha";
    protected $primaryKey = "IdUsuaFich";
    public $timestamps = false;
}
