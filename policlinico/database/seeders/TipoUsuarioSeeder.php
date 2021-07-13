<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_usuario = [
            [
                'IdTipoUsuario' => 1,
                'TipoUsuario' => 'Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'IdTipoUsuario' => 2,
                'TipoUsuario' => 'Medico',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'IdTipoUsuario' => 3,
                'TipoUsuario' => 'Paciente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('tipo_usuario')->insert($tipo_usuario);
    }
}
