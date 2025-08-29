<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/exercicio4', [ExerciciosController::class, 'exercicio4']);

Route::post('/respExercicio4', [ExerciciosController::class, "resposta_exercicio4"]);