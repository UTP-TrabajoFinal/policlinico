<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->increments('IdMedico');
            $table->integer('DNI');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->date('FechaIngreso');
            $table->string('URL')->default('/storage/medicos/default.png');;
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('usuario');

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
        Schema::dropIfExists('medico');
    }
}
