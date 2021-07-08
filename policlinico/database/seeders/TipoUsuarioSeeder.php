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
            ['TipoUsuario' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['TipoUsuario' => 'User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['TipoUsuario' => 'Medico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['TipoUsuario' => 'Paciente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        DB::table('tipo_usuario')->insert($tipo_usuario);
    }
}
