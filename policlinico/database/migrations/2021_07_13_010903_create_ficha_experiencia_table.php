<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaExperienciaTable extends Migration
{
    public function up()
    {
        Schema::create('ficha_experiencia', function (Blueprint $table) {
            $table->increments('IdFichaExperiencia');
            $table->string('Institucion');
            $table->string('Cargo');
            $table->year('Inicio');
            $table->year('Fin');
            $table->unsignedInteger('IdMedico');
            $table->timestamps();
            $table->foreign('IdMedico')->references('IdMedico')->on('medico');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ficha_experiencia');
    }
}
