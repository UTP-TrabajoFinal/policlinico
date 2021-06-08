<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->increments('IdCita');
            $table->unsignedInteger('IdPaciente');
            $table->foreign('IdPaciente')->references('IdPaciente')->on('paciente');
            $table->unsignedInteger('IdEspecialidadMedico');
            $table->foreign('IdEspecialidadMedico')->references('IdEspecialidadMedico')->on('especialidad_medico');
            $table->date('FechaCita');
            $table->time('HoraCita', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
