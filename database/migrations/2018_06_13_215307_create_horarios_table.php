<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('started_at');
            $table->string('end_at');
            $table->timestamps();

            $table->unsignedInteger('disciplina_id');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');

            $table->unsignedInteger('periodo_id');
            $table->foreign('periodo_id')->references('id')->on('periodos');

            $table->unsignedInteger('dia_id');
            $table->foreign('dia_id')->references('id')->on('dias');

            $table->unsignedInteger('turno_id');
            $table->foreign('turno_id')->references('id')->on('turnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
