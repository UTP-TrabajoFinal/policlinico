<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad_medico', function (Blueprint $table) {
            $table->increments('IdEspecialidadMedico');
            $table->unsignedInteger('IdEspecialidad');
            $table->unsignedInteger('IdMedico');
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->boolean('Estado')->default('1');
            $table->foreign('IdEspecialidad')->references('IdEspecialidad')->on('especialidad');
            $table->foreign('IdMedico')->references('IdMedico')->on('medico');
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
        Schema::dropIfExists('especialidad_medico');
    }
}
