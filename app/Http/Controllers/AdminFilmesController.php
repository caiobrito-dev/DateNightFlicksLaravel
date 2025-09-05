<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Genero;
use App\Models\Categoria;

class AdminFilmesController extends Controller
{
    public function index()
    {
        $filmes = Filme::all(); 
        $generos = Genero::all(); 
        $categorias = Categoria::all(); 
        
        return view("admin.index", compact("filmes", "generos", "categorias")); 
    }

    public function create() 
    {
        $generos = Genero::all(); 
        $categorias = Categoria::all(); 
        return view('admin.filmes', compact('generos', 'categorias')); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'sinopse' => 'required|string',
            'ano_lancamento' => 'required|integer',
            'duracao' => 'required|string|integer',
            'url_poster' => 'required|url',
            'generos' => 'array',
            'generos.*' => 'exists:generos,id',
            'categorias' => 'array',
            'categorias.*' => 'exists:categorias,id',
        ]); 

        $filme = Filme::create($validatedData); 

        $filme->generos()->sync($request->generos); 
        $filme->categorias()->sync($request->categorias); 

        return redirect()-> route('admin.filmes.create')->with('status', 'Filme adicionado com sucesso!'); 
    }
}
