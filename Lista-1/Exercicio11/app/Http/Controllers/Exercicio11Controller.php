<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio11Controller extends Controller
{
    public function exercicio11()
    {
        return view("exercicio11");
    }

    public function resposta_exercicio11(Request $request)
    {
        $raio = $request->num;
        
        $perimetro = 2 * 3.14 * $raio;
        return "O perímetro do círculo é $perimetro";
    }
}
