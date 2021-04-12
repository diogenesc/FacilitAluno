<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AnotacaoController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\InstituicaoController;

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
    'instituicoes' => InstituicaoController::class,
    'cursos' => CursoController::class,
    'disciplinas' => DisciplinaController::class,
    'atividades' => AtividadeController::class,
    'anotacoes' => AnotacaoController::class,
    'metas' => MetaController::class,
    'materiais' => MaterialController::class,
    'admins' => AdminController::class,
    'alunos' => AlunoController::class
]);
