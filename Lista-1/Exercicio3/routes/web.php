<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/exercicio3', [ExerciciosController::class, 'exercicio3']);

Route::post('/respExercicio3', [ExerciciosController::class, 'resposta_exercicio3']);