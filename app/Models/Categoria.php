<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Categoria extends Model
{
    use HasFactory; 

     protected $fillable = [
        'nome',
    ];

    public function filmes()
    {
        return $this->belongsToMany(Filme::class, 'filme_categoria', 'categoria_id', 'filme_id'); 
    }
}
