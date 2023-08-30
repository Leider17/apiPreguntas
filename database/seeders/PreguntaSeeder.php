<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta::create([
            'id'=>1,
            'content'=>'¿cual es el animal más grande del mundo',
            'asignatura_id'=>1
        ]);
        Pregunta::create([
            'id'=>2,
            'content'=>'¿cual es el animal más rapido del mundo',
            'asignatura_id'=>1
        ]);
    }
}
