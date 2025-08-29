<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/exercicio2', [ExerciciosController::class, "exercicio2"]);

Route::post("/respExercicio2", [ExerciciosController::class, "resposta_exercicio2"]);