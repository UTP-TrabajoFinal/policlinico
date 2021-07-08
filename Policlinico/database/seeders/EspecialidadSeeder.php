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
                'Descripcion' => 'Enfermedades cardiovasculares',
                'foto' => '/storage/especialidades/cardiologia.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Medicina General',
                'Descripcion' => 'La consulta está orientada al abordaje integral del paciente en su aspecto físico, mental y social',
                'foto' => '/storage/especialidades/medicina_general.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreEspecialidad' => 'Nutricion',
                'Descripcion' => 'Es la especialidad que busca mejorar la calidad de vida de las personas a través de tratamientos dietoterapéuticos y educación alimentaria nutricional',
                'foto' => '/storage/especialidades/nutricion.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('especialidad')->insert($especialidades);
    }
}
