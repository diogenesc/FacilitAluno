<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/material/{material}/download', [MaterialController::class, 'download'])->name('material.download');
    Route::resource('meta', MetaController::class)->parameters([
        'meta' => 'meta'
    ]);
    Route::resources([
        'instituicao' => InstituicaoController::class,
        'curso' => CursoController::class,
        'disciplina' => DisciplinaController::class,
        'atividade' => AtividadeController::class,
        'anotacao' => AnotacaoController::class,
        'material' => MaterialController::class,
        'admin' => AdminController::class,
        'aluno' => AlunoController::class
    ]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
