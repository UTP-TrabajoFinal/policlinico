<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidades = [
            ['NombreEspecialidad' => 'Odontologia', 'Descripcion' => 'sin descripcion'],
            ['NombreEspecialidad' => 'Medicina General', 'Descripcion' => 'sin descripcion'],
            ['NombreEspecialidad' => 'Traumatologia', 'Descripcion' => 'sin descripcion'],
        ];
        DB::table('especialidades')->insert($especialidades);
    }
}
