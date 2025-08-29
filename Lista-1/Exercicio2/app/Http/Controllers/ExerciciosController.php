<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio2()
    {
        return view("exercicio2");
    }

    public function resposta_exercicio2(Request $request)
    {
        $valor1 = $request->num1;
        $valor2 = $request->num2;

        $sub = $valor1 - $valor2;
        return "Subtração: " . $sub;
    }
}
