<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio13()
    {
        return view("exercicio13");
    }

    public function resposta_exercicio13(Request $request)
    {
        $valor = $request->metros;

        $cent = $valor * 100;
        return "$valor metros é $cent centímetros.";
    }
}
