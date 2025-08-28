<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme; 

class SorteioController extends Controller
{
    public function sortearTodos()
    {
        $filmeSorteado = Filme::all()->random(); 
        
        if(!$filmeSorteado)
        {
            return view('sorteio.resultado', ['filme' => null, 'mensagem' => 'nenhum filme encontrado']); 
        }
        return view('sorteio.resultado', ['filme' => $filmeSorteado]); 
    }
}
