<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicos = [
            [
                'DNI' => random_int(70000000, 99999999),
                'Nombres' => 'Pedro',
                'Apellidos' => 'Perez del Solar',
                'FechaIngreso' => now(),
                'IdUsuario' => '4'
            ],
        ];
        DB::table('medico')->insert($medicos);
    }
}
