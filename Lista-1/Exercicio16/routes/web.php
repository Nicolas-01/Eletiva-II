<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

Route::get("/exercicio16", [ExercicioController::class, "exercicio16"]);

Route::post("/respExercicio16", [ExercicioController::class, "resposta_exercicio16"]);