<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', [AlunoController::class, "index"]);
Route::post('/aluno', [AlunoController::class, "salvar"]);
Route::get('/aluno/excluir/{id}', [AlunoController::class, "excluir"]);
Route::get("/aluno/editar/{id}", [AlunoController::class, "editar"]);