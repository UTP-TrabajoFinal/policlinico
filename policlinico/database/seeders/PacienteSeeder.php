<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pacientes =[
            [
                'IdUsuario' => '2'
            ]
        ];
        DB::table('paciente')->insert($pacientes);
    }
}
