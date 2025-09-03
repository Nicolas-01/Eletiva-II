<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

Route::get("/exercicio19", [ExercicioController::class, "exercicio19"]);

Route::post("/respExercicio19", [ExercicioController::class, 'resposta_exercicio19']);
