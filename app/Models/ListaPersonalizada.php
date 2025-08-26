<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ListaPersonalizada extends Model
{
    use HasFactory; 

    protected $table = 'listas_personalizadas'; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function filmes()
    {
        return $this->belongsToMany(Filme::class, 'lista_filme', 'lista_personalizada_id', 'filme_id'); 
    }
}
