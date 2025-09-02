<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio10 ()
    {
        return view("exercicio10");
    }

    public function resposta_exercicio10(Request $request)
    {
        $largura = $request->larg;
        $altura = $request->alt;

        $perimetro = 2 * ($largura + $altura);
        return "O perímetro do retângulo é $perimetro";
    }
}
