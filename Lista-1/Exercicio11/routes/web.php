<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio11Controller;

Route::get("/exercicio11", [Exercicio11Controller::class, "exercicio11"]);

Route::post("/respExercicio11", [Exercicio11Controller::class, "resposta_exercicio11"]);