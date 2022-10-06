<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRebaPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reba_preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('grupo');
            $table->string('descripcion');
            $table->string('imagen');
            $table->integer('puntaje_min');
            $table->integer('puntaje_max');
            $table->boolean('si_no');
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
        Schema::dropIfExists('reba_preguntas');
    }
}
