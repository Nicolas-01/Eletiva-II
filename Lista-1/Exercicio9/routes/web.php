<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get("/exercicio9", [ExerciciosController::class, "exercicio9"]);

Route::post("/respExercicio9", [ExerciciosController::class, "resposta_exercicio9"]);