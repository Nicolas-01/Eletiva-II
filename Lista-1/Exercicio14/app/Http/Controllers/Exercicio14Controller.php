<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio14Controller extends Controller
{
    public function exercicio14()
    {
        return view("exercicio14");
    }

    public function resposta_exercicio14(Request $request)
    {
        $km = $request->num;

        $milhas = $km * 0.621371;
        return "$km km são $milhas milhas.";
    }
}
