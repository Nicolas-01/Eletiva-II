<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio8()
    {
        return view("exercicio8");
    }

    public function resposta_exercicio8(Request $request)
    {
        $largura = $request->larg;
        $altura = $request->alt;

        $area = $largura * $altura;
        return "Área do retângulo: $area metros";
    }
}
