<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio9()
    {
        return view("exercicio9");
    }

    public function resposta_exercicio9(Request $request)
    {
        $raio = $request->num;

        $area = 3.14 * ($raio ** 2);
        return "A área do círculo é " . $area;
    }
}
