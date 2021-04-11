<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'instituicoes' => \App\Http\Controllers\InstituicaoController::class,
    'cursos' => \App\Http\Controllers\CursoController::class,
    'disciplinas' => \App\Http\Controllers\DisciplinaController::class,
    'atividades' => \App\Http\Controllers\AtividadeController::class,
    'anotacoes' => \App\Http\Controllers\AnotacaoController::class,
    'metas' => \App\Http\Controllers\MetaController::class,
    'materiais' => \App\Http\Controllers\MaterialController::class
]);
