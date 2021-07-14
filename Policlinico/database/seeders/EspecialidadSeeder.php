<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            [
                'NombreEspecialidad' => 'Cardiologia',
                'foto' => '/storage/especialidades/cardiologia.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Medicina General',
                'foto' => '/storage/especialidades/medicina_general.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Nutricion',
                'foto' => '/storage/especialidades/nutricion.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('especialidad')->insert($especialidades);
    }
}
