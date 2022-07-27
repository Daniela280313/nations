<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //la tabla a conectar:
     protected $table ="countries";
     //la clave primaria de esa tabla
     protected $primaryKey = "country_id";
     //omitir los campos de auditoria:
     public $timestamps =false;
    use HasFactory;
}
