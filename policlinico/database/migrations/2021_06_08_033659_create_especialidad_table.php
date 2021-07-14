<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadTable extends Migration
{
    public function up()
    {
        Schema::create('especialidad', function (Blueprint $table) {
            $table->increments('IdEspecialidad');
            $table->string('NombreEspecialidad', 100);
            $table->string('foto')->default('/storage/especialidades/default.png');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('especialidad');
    }
}
