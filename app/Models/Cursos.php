<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    /** @use HasFactory<\Database\Factories\CursosFactory> */
    use HasFactory;
    protected $fillable = ["nombre_curso", "codigo", "detalles"];

}
