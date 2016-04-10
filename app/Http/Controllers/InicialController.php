<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 09/04/2016
 * Time: 23:11
 */

namespace CursoLaravel\Http\Controllers;

class InicialController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function exemplo() {
        return  view('exemplo');
    }

}