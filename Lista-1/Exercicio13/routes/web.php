<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get("/exercicio13", [ExerciciosController::class, "exercicio13"]);

Route::post("/respExercicio13", [ExerciciosController::class, "resposta_exercicio13"]);