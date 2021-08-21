<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquetesController;





Route::get('/criar', [EnquetesController::class, 'criar']);

Route::get('/', [EnquetesController::class, 'index']);

Route::post('/enquete', [EnquetesController::class, 'store']);

Route::get('/{id}', [EnquetesController::class, 'show']);

Route::get('/resposta1/{id}', [EnquetesController::class, 'resposta1']);
Route::get('/resposta2/{id}', [EnquetesController::class, 'resposta2']);
Route::get('/resposta3/{id}', [EnquetesController::class, 'resposta3']);

Route::get('/deletar/{id}',[EnquetesController::class, 'deletar']);

Route::put('/atualizar/{id}',[EnquetesController::class, 'atualizar']);

Route::get('/dados/{id}',[EnquetesController::class, 'atualizarview']);