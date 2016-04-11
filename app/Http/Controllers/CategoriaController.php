<?php

namespace CursoLaravel\Http\Controllers;

use Illuminate\Http\Request;

use CursoLaravel\Http\Requests;

class CategoriaController extends Controller
{
    public function  index(){
        return "Listagem de Categorias";
    }
}
