<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Respuesta::create([
            'id'=>1,
            'content'=>'la ballena azul',
            'value'=>true,
            'pregunta_id'=>1
        ]);
        Respuesta::create([
            'id'=>2,
            'content'=>'la hormiga',
            'value'=>false,
            'pregunta_id'=>1
        ]);
        Respuesta::create([
            'id'=>3,
            'content'=>'el elefante',
            'value'=>false,
            'pregunta_id'=>1
        ]);
        Respuesta::create([
            'id'=>4,
            'content'=>'la vaca',
            'value'=>false,
            'pregunta_id'=>1
        ]);
        Respuesta::create([
            'id'=>5,
            'content'=>'la tortuga',
            'value'=>false,
            'pregunta_id'=>2
        ]);
        Respuesta::create([
            'id'=>6,
            'content'=>'el guepardo',
            'value'=>true,
            'pregunta_id'=>2
        ]);
        Respuesta::create([
            'id'=>7,
            'content'=>'el caballo',
            'value'=>false,
            'pregunta_id'=>2
        ]);
        Respuesta::create([
            'id'=>8,
            'content'=>'la liebre',
            'value'=>false,
            'pregunta_id'=>2
        ]);
    }
}
