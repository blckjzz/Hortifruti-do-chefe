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
Route::get('/', 'SiteController@viewIndex');
Route::get('/sobre', 'SiteController@viewSobre');
Route::get('/orcamento', 'SiteController@viewOrcamento');
Route::get('/contato', 'SiteController@viewContato');

/*
 + ============================ +
 + ROTAS AUTENTICAÇÃO/LOGOUT    +
 + ============================ +
 */
Route::get('/painel/entrar', 'Auth\AuthController@showLoginForm');
Route::post('/painel/entrar', 'Auth\AuthController@login');
Route::get('/painel/sair', 'Auth\AuthController@logout');

/*
 + ============================ +
 + EXIBE HOME DO PAINEL         +
 + ============================ +
 */
Route::get('/painel', 'SiteController@painelHome')->middleware('auth');

/*
 + ====================================== +
 + ROTAS PAINEL DE ADMNISTRAÇÃO - PRODUTO +
 + ====================================== +
 */
Route::get('/painel/listagem', 'ProdutoController@listarProdutos');
Route::get('/painel/novoproduto', 'ProdutoController@create');
Route::post('/painel/novoproduto', 'ProdutoController@store');
Route::get('/painel/mostrar/{id}', 'ProdutoController@show');
Route::get('/painel/editar/{id}', 'ProdutoController@edit');
Route::get('/painel/deletar/{id}', 'ProdutoController@destroy');
Route::post('/painel/atualizar/{id}', 'ProdutoController@update');

/*
 + ==================================+
 + ROTAS PAINEL DE ORÇAMENTO         +
 + ==================================+
 */

Route::get('/painel/novopedido', 'PedidoController@showPedidoForm');
Route::post('/painel/resumo-pedido', 'PedidoController@mostraResumoPedido');
Route::post('/painel/novopedido', 'PedidoController@store');

/*
 + ============================ +
 + ROTAS CLIENTE +
 + ============================ +
 */
Route::get('/painel/cadastro-cliente', 'ClienteController@create');
Route::post('/painel/cadastro-cliente', 'ClienteController@store');
Route::get('/painel/lista-clientes', 'ClienteController@listarClientes');
Route::get('/painel/mostrar-cliente/{id}', 'ClienteController@show');
Route::get('/painel/editar-cliente/{id}', 'ClienteController@edit');
Route::get('/painel/apagar-cliente/{id}', 'ClienteController@destroy');


/*
 + ================================= +
 + ROTAS CADASTRO DE DEFAULT LARAVEL +
 + ================================= +
 */

Route::get('/painel/registrar', 'Auth\AuthController@showRegistrationForm'); // remover do blade
//Route::post('/painel/registrar','Auth\AuthController@register');

