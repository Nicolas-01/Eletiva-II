<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get("/exercicio8", [ExerciciosController::class, "exercicio8"]);

Route::post("/respExercicio8", [ExerciciosController::class, "resposta_exercicio8"]);