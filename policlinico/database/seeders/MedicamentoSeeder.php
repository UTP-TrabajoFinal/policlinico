<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicamentos = [
            [
                'NombreMedicamento' => 'Paracetamol de 500mg',
                'Presentacion' => 'Pastilla',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreMedicamento' => 'Paracetamol de 1gr',
                'Presentacion' => 'Pastilla',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreMedicamento' => 'Ketamina 50mg',
                'Presentacion' => 'Pastilla',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreMedicamento' => 'Ibuprofeno 400mg',
                'Presentacion' => 'Pastilla',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NombreMedicamento' => 'Adrenalina 1gr',
                'Presentacion' => 'Inyectable',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('medicamento')->insert($medicamentos);
    }
}
