<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio15Controller;

Route::get("/exercicio15", [Exercicio15Controller::class, "exercicio15"]);

Route::post("/respExercicio15", [Exercicio15Controller::class, "resposta_exercicio15"]);