<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta', function (Blueprint $table) {
            $table->increments('IdReceta');
            $table->unsignedInteger('IdCita');
            $table->foreign('IdCita')->references('IdCita')->on('cita');
            $table->unsignedInteger('IdMedicamento');
            $table->foreign('IdMedicamento')->references('IdMedicamento')->on('medicamento');
            $table->unsignedInteger('IdFrecuencia');
            $table->foreign('IdFrecuencia')->references('IdFrecuencia')->on('frecuencia');
            $table->integer('CantidadDias');
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
        Schema::dropIfExists('receta');
    }
}
