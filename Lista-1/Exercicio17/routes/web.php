<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

Route::get("/exercicio17", [ExercicioController::class, "exercicio17"]);

Route::post("/respExercicio17", [ExercicioController::class, 'resposta_exercicio17']);