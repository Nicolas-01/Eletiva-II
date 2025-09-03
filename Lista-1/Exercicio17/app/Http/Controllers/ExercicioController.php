<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function exercicio17 ()
    {
        return view("exercicio17");
    }

    public function resposta_exercicio17(Request $request)
    {
        $capital = $request->capital;
        $juros = $request->juros;
        $periodo = $request->periodo;

        $valor = $capital + ($capital * ($juros/100) * $periodo);
        return "Valor com juros: R$ $valor";
    }
}
