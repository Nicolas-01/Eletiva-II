<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerExercicio6 extends Controller
{
    public function exercicio6()
    {
        return view("exercicio6");
    }

    public function resposta_exercicio6(Request $request)
    {
        $valor = $request->num;

        $fahrenheit = $valor * 9 / 5 + 32;
        return "$valor °C são $fahrenheit °F";
    }
}
