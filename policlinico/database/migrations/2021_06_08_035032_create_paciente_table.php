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
            $table->integer('DNI')->unique()->nullable();
            $table->string('Nombres')->nullable()->nullable();
            $table->string('Apellidos')->nullable();
            $table->string('Direccion')->nullable();
            $table->boolean('Sexo')->nullable();//Hombre=0, Mujer=1
            $table->bigInteger('Telefono')->nullable();
            $table->string('URL')->default('/storage/pacientes/default.png');
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
