<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerExercicio6;

Route::get("/exercicio6", [ControllerExercicio6::class, "exercicio6"]);

Route::post("/respExercicio6", [ControllerExercicio6::class, "resposta_exercicio6"]);