<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1=Admin 2=Medico 3=paciente
        $usuarios = [
            [
                'Usuario' => 'admin',
                'Password' => 'eyJpdiI6IkExRWlGZFkybHRyeWkxY2h3VUtKaGc9PSIsInZhbHVlIjoidUkvQmNwT3lpTTdLRkdUZy9SU3orUT09IiwibWFjIjoiOWNmZDQ2NjJlODMyYzczZWUzZTUyMTg5OGY4MTRhOGY3NzUzOTBhODQwYzk2MzNiMzRjNmEyNWIwMzVmNGRhZSJ9',
                'IdTipoUsuario' => '1',//admin
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Usuario' => '71789326',
                'Password' => 'eyJpdiI6IkExRWlGZFkybHRyeWkxY2h3VUtKaGc9PSIsInZhbHVlIjoidUkvQmNwT3lpTTdLRkdUZy9SU3orUT09IiwibWFjIjoiOWNmZDQ2NjJlODMyYzczZWUzZTUyMTg5OGY4MTRhOGY3NzUzOTBhODQwYzk2MzNiMzRjNmEyNWIwMzVmNGRhZSJ9',
                'IdTipoUsuario' => '3',//Paciente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Usuario' => '07408073',
                'Password' => 'eyJpdiI6IkExRWlGZFkybHRyeWkxY2h3VUtKaGc9PSIsInZhbHVlIjoidUkvQmNwT3lpTTdLRkdUZy9SU3orUT09IiwibWFjIjoiOWNmZDQ2NjJlODMyYzczZWUzZTUyMTg5OGY4MTRhOGY3NzUzOTBhODQwYzk2MzNiMzRjNmEyNWIwMzVmNGRhZSJ9',
                'IdTipoUsuario' => '3',//Paciente
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Usuario' => 'user2',
                'Password' => 'eyJpdiI6IkExRWlGZFkybHRyeWkxY2h3VUtKaGc9PSIsInZhbHVlIjoidUkvQmNwT3lpTTdLRkdUZy9SU3orUT09IiwibWFjIjoiOWNmZDQ2NjJlODMyYzczZWUzZTUyMTg5OGY4MTRhOGY3NzUzOTBhODQwYzk2MzNiMzRjNmEyNWIwMzVmNGRhZSJ9',
                'IdTipoUsuario' => '2',//Medico
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('usuario')->insert($usuarios);
    }
}
