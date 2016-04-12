<?php

namespace CursoLaravel\Http\Controllers;

use CursoLaravel\Categoria;
use Illuminate\Http\Request;

use CursoLaravel\Http\Requests;

class CategoriaController extends Controller
{
    private $categoriaModel;

    public function __construct(Categoria $categoriaModel){

        $this->categoriaModel = $categoriaModel;

    }

    public function  index(){

        $categorias = $this->categoriaModel->all();

        return view('categoria.index', compact('categorias'));
    }

    public function criar(){
        return view('categoria.criar');
    }

    public function salvar(Requests\CategoriaRequest $request){
        $input = $request->all();
        $categoria = $this->categoriaModel->fill($input);
        $categoria->save();
        return  redirect()->route('categoria');
    }

    public  function apagar($id){
        $this->categoriaModel->find($id)->delete();
        return  redirect()->route('categoria');
    }
}
