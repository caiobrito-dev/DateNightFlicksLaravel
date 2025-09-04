<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; 
use App\Models\Genero; 

class AdminGenerosCategoriasController extends Controller
{
    public function create()
    {
        return view("admin.generos_categorias"); 
    }

    public function storeGenero(Request $request)
    {
        $validateData = $request->validate([
            "nome" => "required|string|max:255|unique:generos,nome"
        ]); 

        Genero::create($validateData); 

        return redirect()->back()->with("status", "Genero adicionado com sucesso!"); 
    }

    public function storeCategoria(Request $request)
    {
        $validateData = $request->validate([
            "nome" => "required|string|max:255|unique:categorias,nome"
        ]);

        Categoria::create($validateData); 

        return redirect()->back()->with("status", "Categoria adicionada com sucesso!"); 
    }
}
