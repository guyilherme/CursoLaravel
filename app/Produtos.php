<?php

namespace CursoLaravel;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco'];
}
