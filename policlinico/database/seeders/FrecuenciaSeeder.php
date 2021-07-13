<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrecuenciaSeeder extends Seeder
{
    public function run()
    {
        $frecuencias = [
            ['NombreFrecuencia' => 'Cada 8 horas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['NombreFrecuencia' => 'Cada 12 horas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['NombreFrecuencia' => 'Cada 24 horas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        DB::table('frecuencia')->insert($frecuencias);
    }
}
