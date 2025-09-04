<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Genero extends Model
{
    use HasFactory; 

    protected $fillable = [
        'nome',
    ];

    public function filmes()
    {
        return $this->belongsToMany(Filme::class, 'filme_genero', 'genero_id', 'filme_id');
    }
}
