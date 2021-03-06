<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EspecialidadSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(FrecuenciaSeeder::class);
        $this->call(MedicamentoSeeder::class);
    }
}
