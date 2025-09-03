<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio20Controller extends Controller
{
    public function exercicio20()
    {
        return view("exercicio20");
    }
    public function resposta_exercicio20(Request $request)
    {
        $dist = $request->dist;
        $tempo = $request->tempo;

        $vm = $dist / $tempo;
        return "A velocidade média é: ". number_format($vm, 1, ',', '.'). " Km/h";
    }
}
