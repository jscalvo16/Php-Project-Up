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
}
