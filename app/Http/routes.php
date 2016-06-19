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
Route::get('/painel/busca', 'BuscaController@busca');
//Route::get('/painel/busca-produto', 'BuscaController@buscaProduto');
Route::get('/painel/painel-produto', 'ProdutoController@home');
Route::get('/painel/produto-listagem', 'ProdutoController@listarProdutos');
Route::get('/painel/novo-produto', 'ProdutoController@create');
Route::post('/painel/novo-produto', 'ProdutoController@store');
Route::get('/painel/mostrar-produto/{id}', 'ProdutoController@show');
Route::get('/painel/editar-produto/{id}', 'ProdutoController@edit');
Route::get('/painel/deletar-produto/{id}', 'ProdutoController@destroy');
Route::post('/painel/atualizar-produto/{id}', 'ProdutoController@update');

/*
 + ==================================+
 + ROTAS PAINEL - PEDIDO         +
 + ==================================+
 */
//Route::get('/painel/busca-pedido', 'BuscaController@buscaPedido');
Route::get('/painel/painel-pedido', 'PedidoController@home');
Route::get('/painel/novo-pedido', 'PedidoController@showPedidoForm');
Route::post('/painel/novo-pedido/{pedido}', 'PedidoController@store');
Route::post('/painel/resumo-pedido', 'PedidoController@mostraResumoPedido');
Route::get('/painel/consultar-pedidos', 'PedidoController@consultarPedidos');
Route::get('/painel/mostrar-pedido/{id}', 'PedidoController@show');
Route::get('/painel/editar-pedido/{id}', 'PedidoController@edit');
Route::get('/painel/deletar-pedido/{id}', 'PedidoController@destroy');
Route::post('/painel/atualizar-pedido/{id}', 'PedidoController@update');



/*
 + ============================ +
 + ROTAS CLIENTE                +
 + ============================ +
 */

//Route::get('/painel/busca-cliente', 'BuscaController@buscaNome');
Route::get('/painel/painel-cliente', 'ClienteController@home');
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

