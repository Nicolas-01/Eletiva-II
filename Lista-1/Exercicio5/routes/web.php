<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerExercicio5;

Route::get('/exercicio5', [ControllerExercicio5::class, "exercicio5"]);

Route::post("/respExercicio5", [ControllerExercicio5::class, "resposta_exercicio5"]);