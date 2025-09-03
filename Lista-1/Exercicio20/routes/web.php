<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio20Controller;

Route::get("/exercicio20", [Exercicio20Controller::class, "exercicio20"]);

Route::post("/respExercicio20", [Exercicio20Controller::class, "resposta_exercicio20"]);