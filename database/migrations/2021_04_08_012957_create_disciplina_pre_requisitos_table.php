<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaPreRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_pre_requisitos', function (Blueprint $table) {
            $table->foreignId('id_pre_requisito')->constrained('disciplinas');
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
        Schema::dropIfExists('disciplina_pre_requisitos');
    }
}
