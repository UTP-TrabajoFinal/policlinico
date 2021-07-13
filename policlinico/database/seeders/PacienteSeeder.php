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
                'DNI' => '71789326',
                'Nombres' => 'david',
                'Apellidos' => 'enciso acuña',
                'Direccion' => 'casa de david',
                'Sexo' => '1',
                'Telefono' => '123456',
                'IdUsuario' => '2',
            ],
            [
                'DNI' => '07408073',
                'Nombres' => 'edith',
                'Apellidos' => 'acuña farro',
                'Direccion' => 'casa de edith',
                'Sexo' => '1',
                'Telefono' => '123456',
                'IdUsuario' => '2',
            ],
        ];
        DB::table('paciente')->insert($pacientes);
    }
}
