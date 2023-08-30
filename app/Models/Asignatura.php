<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Asignatura extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function preguntas():HasMany{
        return $this->hasMany(Pregunta::class);
    }

    public function respuestas():HasManyThrough{
        return $this->HasManyThrough(Respuesta::class,Pregunta::class);
    }
}
