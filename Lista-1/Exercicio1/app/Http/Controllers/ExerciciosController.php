<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exercicio1()
    {
        return view("Exercicio1");
    }
    
    public function respExercicio1 (Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;

        $soma = $num1 + $num2;
        return "Soma: ".$soma;
    }
}
