<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerExercicio5 extends Controller
{
    public function exercicio5()
    {
        return view("exercicio5");
    }

    public function resposta_exercicio5(Request $request)
    {
        $valor1 = $request->num1;
        $valor2 = $request->num2;
        $valor3 = $request->num3;

        $media = ($valor1 + $valor2 + $valor3) / 3;
        return "Média: " . $media;
    }
}
