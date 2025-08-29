<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController; // tem que adicionar

Route::get('/exercicio1',[ExerciciosController::class, "exercicio1"]);

Route::post("/resposta_exercicio1", [ExerciciosController::class, "respExercicio1"]);