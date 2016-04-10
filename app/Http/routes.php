<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('produtos',['as'=>'produtos', function(){

    echo Route::getCurrentRoute()->getPath();

    return "Produtos";
}]);

//redirect()->route('produtos');

//echo route('produtos');die;

Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

Route::get('exemplo', 'InicialController@exemplo');

Route::match(['get','post'], 'exemplo2', function(){
    return "Exemplo 2";
});

Route::get('user/{id?}', function($id = null){
    if($id)
        return "Olá $id";
   return "Nâo possue Parametro no link";
});