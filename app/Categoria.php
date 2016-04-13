<?php

namespace CursoLaravel;

use Illuminate\Database\Eloquent\Model;
use CursoLaravel\Produtos;

class Categoria extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function produtos(){
        return $this->hasMany(Produtos::class);
    }
}
