<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaEstudiosTable extends Migration
{
    public function up()
    {
        Schema::create('ficha_estudios', function (Blueprint $table) {
            $table->increments('IdFichaEstudios');
            $table->string('Grado');
            $table->string('Institucion');
            $table->year('Inicio');
            $table->year('Fin');
            $table->unsignedInteger('IdMedico');
            $table->timestamps();
            $table->foreign('IdMedico')->references('IdMedico')->on('medico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_estudios');
    }
}
