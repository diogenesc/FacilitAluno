<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('id_curso')->constrained('cursos');
            $table->foreignId('id_disciplina')->constrained('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_disciplinas');
    }
}
