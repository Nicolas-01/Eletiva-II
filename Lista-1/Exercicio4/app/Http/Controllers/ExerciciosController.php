<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio4()
    {
        return view("exercicio4");
    }

    public function resposta_exercicio4(Request $request)
    {
        $valor1 = $request->num1;
        $valor2 = $request->num2;

        if ($valor2 == 0) {
            return "Não é possível dividir por zero!";
        } else {
            $div = $valor1 / $valor2;
            return "Divisão: " . $div;
        }
    }
}
