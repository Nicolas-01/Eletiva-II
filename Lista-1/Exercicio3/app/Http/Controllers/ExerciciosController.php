<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio3()
    {
        return view("exercicio3");
    }

    public function resposta_exercicio3(Request $request)
    {
        $valor1 = $request->num1;
        $valor2 = $request->num2;

        $mult = $valor1 * $valor2;
        return "Multiplicação: " . $mult;
    }
}
