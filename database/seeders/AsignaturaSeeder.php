<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asignatura::create([
            'id'=>1,
            'content'=>'Biologia'
        ]);
        Asignatura::create([
            'id'=>2,
            'content'=>'matematicas'
        ]);
        Asignatura::create([
            'id'=>3,
            'content'=>'fisica'
        ]);
        Asignatura::create([
            'id'=>4,
            'content'=>'Lenguas'
        ]);
    }
}
