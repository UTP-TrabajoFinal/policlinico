<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('IdPaciente');
            $table->integer('DNI');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Direccion');
            $table->boolean('Sexo');
            $table->bigInteger('Telefono');
            $table->string('URL');
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
        Schema::dropIfExists('paciente');
    }
}
