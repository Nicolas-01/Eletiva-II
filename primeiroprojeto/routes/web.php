<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/teste', [ExerciciosController::class, "teste"]);

Route::get("/exemplo", [ExerciciosController::class, "abrirForm"]);

Route::post("/exemplo_resposta", [ExerciciosController::class,"resposta"]);

Route::get("/exercicio2", [ExerciciosController::class, "exercicio2"]);
Route::post("/resposta_exercicio2", [ExerciciosController::class, "respExercicio2"]);