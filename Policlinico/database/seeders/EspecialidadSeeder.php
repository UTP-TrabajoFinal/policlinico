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
                'Descripcion' => 'sin descripcion',
                'created_at' => Carbon::now(),

                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Geriatria',
                'Descripcion' => 'sin descripcion',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Medicina General',
                'Descripcion' => 'sin descripcion',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Nutricion',
                'Descripcion' => 'sin descripcion',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Odontologia',
                'Descripcion' => 'sin descripcion',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Psicologia',
                'Descripcion' => 'sin descripcion',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Urologia',
                'Descripcion' => 'sin descripcion',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('especialidad')->insert($especialidades);
    }
}
