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



/*
 + ============================ +
 + ROTAS SITE                   +
 + ============================ +
 */
Route::get('/','SiteController@viewIndex');
Route::get('/sobre','SiteController@viewSobre');
Route::get('/orcamento','SiteController@viewOrcamento');
Route::get('/contato','SiteController@viewContato');


/*
 + ============================ +
 + EXIBE HOME DO PAINEL         +
 + ============================ +
 */
Route::get('/painel','SiteController@painelHome')->middleware('auth');

/*
 + ============================ +
 + ROTAS PAINEL DE ADMNISTRAÇÃO +
 + ============================ +
 */
Route::get('/painel/listagem','ProdutoController@listarProdutos');
Route::get('/painel/novoproduto', 'ProdutoController@create');
Route::post('/painel/novoproduto', 'ProdutoController@store');
Route::get('/painel/mostrar/{id}','ProdutoController@show');
Route::get('/painel/editar/{id}', 'ProdutoController@edit');
Route::get('/painel/deletar/{id}', 'ProdutoController@destroy');
Route::post('/painel/atualizar/{id}','ProdutoController@update');



/*
 + ============================ +
 + ROTAS AUTENTICAÇÃO           +
 + ============================ +
 */
Route::get('/painel/entrar','Auth\AuthController@showLoginForm');
Route::post('/painel/entrar','Auth\AuthController@login');
Route::get('/painel/sair','Auth\AuthController@logout');

/*
 + ============================ +
 + ROTAS CADASTRO DE USUARIOS   +
 + ============================ +
 */

Route::get('/painel/registrar','Auth\AuthController@showRegistrationForm');
Route::post('/painel/registrar','Auth\AuthController@register');

