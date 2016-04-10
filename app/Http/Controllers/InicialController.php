<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 09/04/2016
 * Time: 23:11
 */

namespace CursoLaravel\Http\Controllers;

use CursoLaravel\Categoria;

class InicialController extends Controller
{
    private $categorias;

    public function __construct(Categoria $categoria)
    {
        $this->categorias = $categoria;
        $this->middleware('guest');
    }

    public function exemplo() {

        $categorias = $this->categorias->all();
        return  view('exemplo', compact('categorias'));
    }

}