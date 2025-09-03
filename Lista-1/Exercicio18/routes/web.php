<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

Route::get("/exercicio18", [ExercicioController::class, "exercicio18"]);

Route::post("/respExercicio18", [ExercicioController::class, "resposta_exercicio18"]);