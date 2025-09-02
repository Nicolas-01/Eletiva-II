<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerExercicio12 extends Controller
{
    public function exercicio12()
    {
        return view("exercicio12");
    }
    public function resposta_exercicio12(Request $request)
    {
        $base = $request->base;
        $exp = $request->expoente;

        $calc = $base ** $exp;
        return "$base elevado a $exp é $calc";
    }
}
