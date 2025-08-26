<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Filme extends Model
{
    use HasFactory; 

    protected $table = 'filmes'; 

    public function generos()
    {
        return $this->belongsToMany(Genero::class, 'filme_genero', 'filme_id', 'genero_id'); 
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'filme_categoria', 'filme_id', 'categoria_id'); 
    }

    public function listas()
    {
        return $this->belongsToMany(ListaPersonalizada::class, 'lista_filme', 'filme_id', 'lista_personalizada_id'); 
    }
}
