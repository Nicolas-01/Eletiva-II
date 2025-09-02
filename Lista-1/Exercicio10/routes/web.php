<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get("/exercicio10", [ExerciciosController::class, "exercicio10"]);

Route::post("/respExercicio10", [ExerciciosController::class, "resposta_exercicio10"]);