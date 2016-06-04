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

//Route::get('/', function () {
//    return view('welcome');
//});

/**
 * Rotas site
 */
Route::get('/','SiteController@viewIndex');
Route::get('/sobre','SiteController@viewSobre');
Route::get('/orcamento','SiteController@viewOrcamento');
Route::get('/contato','SiteController@viewContato');
//Route::get('/home', 'HomeController@index');

/**
 * Rotas Painel de Admnistração
 */
Route::get('/painel/listagem','ProdutoController@listarProdutos');
Route::get('/painel/novoproduto', 'ProdutoController@create');
Route::post('/painel/novoproduto', 'ProdutoController@store');
Route::get('/painel/mostrar/{id}','ProdutoController@show');
Route::get('/painel/editar/{id}', 'ProdutoController@edit');
Route::get('/painel/deletar/{id}', 'ProdutoController@destroy');
Route::post('/painel/atualizar/{id}','ProdutoController@update');

//exibe home
Route::get('/painel',function(){
    return view('painel.home_admin_painel');
})->middleware('auth');


/**
 * Rotas de autenticação alteradas
 */
Route::get('/painel/entrar','Auth\AuthController@showLoginForm');
Route::post('/painel/entrar','Auth\AuthController@login');
Route::get('/painel/sair','Auth\AuthController@logout');
/*
 * ROTAS DE REGISTRO DE USUÁRIOS
 * */

Route::get('/painel/registrar','Auth\AuthController@showRegistrationForm');
Route::post('/painel/registrar','Auth\AuthController@register');

