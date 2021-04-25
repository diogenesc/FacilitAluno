<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('disciplinas', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('instituicoes', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('usuarios', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('disciplinas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('instituicoes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
