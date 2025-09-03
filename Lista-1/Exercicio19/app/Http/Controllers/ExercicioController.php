<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function exercicio19()
    {
        return view("exercicio19");
    }

    public function resposta_exercicio19(Request $request)
    {
        $dia = $request->dias;

        $horas = $dia * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        return "Horas: $horas, Minutos: $minutos, Segundos: $segundos";
    }
}
