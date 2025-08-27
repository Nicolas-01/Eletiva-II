<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/teste', [ExerciciosController::class, "teste"]);

Route::get("/exemplo", [ExerciciosController::class, "abrirForm"]);

Route::post("/exemplo_resposta", [ExerciciosController::class,"resposta"]);