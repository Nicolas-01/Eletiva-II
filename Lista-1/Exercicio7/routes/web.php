<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exericicio7Controller;

Route::get("/exercicio7", [Exericicio7Controller::class, "exercicio7"]);

Route::post("/respExercicio7", [Exericicio7Controller::class, "resposta_exercicio7"]);