<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio7Controller;

Route::get("/exercicio7", [Exercicio7Controller::class, "exercicio7"]);

Route::post("/respExercicio7", [Exercicio7Controller::class, "resposta_exercicio7"]);