<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio15Controller extends Controller
{
    public function exercicio15()
    {
        return view("exercicio15");
    }

    public function resposta_exercicio15(Request $request)
    {
        $peso = $request->peso;
        $alt = $request->alt;

        $imc = $peso / ($alt ** 2);
        return "Seu IMC é $imc";
    }
}
