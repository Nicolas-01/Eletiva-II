<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio7Controller extends Controller
{
    public function exercicio7()
    {
        return view("exercicio7");
    }
    public function resposta_exercicio7(Request $request)
    {
        $valor = $request->num;

        $celsius = ($valor - 32) * 5 / 9;
        return "$valor °F são $celsius °C.";
    }
}
