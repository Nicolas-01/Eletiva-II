<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function exercicio18()
    {
        return view("exercicio18");
    }

    public function resposta_exercicio18(Request $request)
    {
        $capital = $request->capital;
        $juros = $request->juros;
        $periodo = $request->periodo;

        $valor = $capital * (1 + $juros / 100) ** $periodo;

        return "Valor com juros: R$ " . number_format($valor, 2, ',', '.');
    }
}
