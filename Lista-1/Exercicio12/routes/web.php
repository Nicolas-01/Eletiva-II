<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerExercicio12;

Route::get("/exercicio12", [ControllerExercicio12::class, "exercicio12"]);

Route::post("/respExercicio12", [ControllerExercicio12::class, "resposta_exercicio12"]);