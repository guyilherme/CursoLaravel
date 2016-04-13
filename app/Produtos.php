<?php

namespace CursoLaravel;

use Illuminate\Database\Eloquent\Model;
use CursoLaravel\Categoria;

class Produtos extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'destaque',
        'recomendado',
        'categoria_id'
    ];

    public function Categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
