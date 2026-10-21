<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('criarAlimento', [AlimentosController::class, 'criarAlimentos'])->name('criarAlimentos');
Route::get('listarAlimentos',[AlimentosController::class,'listarAlimentos'])->name('listarAlimentos');
Route::post('atualizarAlimentos', [AlimentosController::class, 'atualizarAlimentos'])->name('atualizarAlimentos');
Route::delete('deletarAlimentos',[AlimentosController::class,'deletarAlimentos'])->name('deletarAlimentos');