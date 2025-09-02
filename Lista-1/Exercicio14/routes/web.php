<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio14Controller;

Route::get("/exercicio14", [Exercicio14Controller::class, "exercicio14"]);

Route::post("respExercicio14", [Exercicio14Controller::class, "resposta_exercicio14"]);