<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function exercicio16()
    {
        return view('exercicio16');
    }

    public function resposta_exercicio16(Request $request)
    {
        $preco = $request->preco;
        $porc = $request->porc;

        $desc = $preco - ($porc * $preco / 100);
        return "Novo preço: R$ $desc";
    }
}
