<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
class Estudiante extends Model
{
    /** @use HasFactory<\Database\Factories\EstudianteFactory> */
    use HasFactory;
    protected $fillable = ["nombre", "facultad", "telefono", "correo"];

    public function profile(){
        return $this-> hasOne(Profile::class);
    }
}
