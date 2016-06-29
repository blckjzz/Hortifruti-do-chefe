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
 + ================================= +
 + ROTAS CADASTRO                    +
 + ================================= +
 */
Route::get('/painel/registrar', 'Auth\AuthController@showRegistrationForm');
Route::post('/painel/registrar','Auth\AuthController@register');


/*
 + ====================================== +
 + ROTAS PAINEL DE ADMNISTRAÇÃO - PRODUTO +
 + ====================================== +
 */
Route::get('/painel/busca', 'BuscaController@busca');
Route::get('/painel/painel-produto', 'ProdutoController@home');
Route::get('/painel/produto-listagem', 'ProdutoController@listarProdutos');
Route::get('/painel/novo-produto', 'ProdutoController@create');
Route::post('/painel/novo-produto', 'ProdutoController@store');
Route::get('/painel/mostrar-produto/{id}', 'ProdutoController@show');
Route::get('/painel/editar-produto/{id}', 'ProdutoController@edit');
Route::get('/painel/deletar-produto/{id}', 'ProdutoController@destroy');
Route::post('/painel/atualizar-produto/{id}', 'ProdutoController@update');
Route::get('/painel/busca-produto', 'BuscaController@buscaProduto');

/*
 + ==================================+
 + ROTAS PAINEL - PEDIDO             +
 + ==================================+
 */
Route::get('/painel/painel-pedido', 'PedidoController@home');
Route::get('/painel/novo-pedido', 'PedidoController@showPedidoForm');
Route::post('/painel/novo-pedido/{pedido}', 'PedidoController@store');
Route::post('/painel/resumo-pedido', 'PedidoController@mostraResumoPedido');
Route::get('/painel/consultar-pedidos', 'PedidoController@consultarPedidos');
Route::get('/painel/mostrar-pedido/{id}', 'PedidoController@show');
Route::get('/painel/editar-pedido/{id}', 'PedidoController@edit');
Route::get('/painel/deletar-pedido/{id}', 'PedidoController@destroy');
Route::post('/painel/atualizar-pedido/{id}', 'PedidoController@update');
Route::get('/painel/busca-pedido', 'BuscaController@buscaPedido');



/*
 + ============================ +
 + ROTAS CLIENTE                +
 + ============================ +
 */

Route::get('/painel/painel-cliente', 'ClienteController@home');
Route::get('/painel/cadastro-cliente', 'ClienteController@create');
Route::post('/painel/cadastro-cliente', 'ClienteController@store');
Route::get('/painel/lista-clientes', 'ClienteController@listarClientes');
Route::get('/painel/mostrar-cliente/{id}', 'ClienteController@show');
Route::get('/painel/desativar-cliente/{id}', 'ClienteController@destroy');
Route::post('/painel/atualizar-cliente/{id}', 'ClienteController@update');
Route::get('/painel/reativar-cliente/{id}', 'ClienteController@reativar');
Route::get('/painel/busca-cliente', 'BuscaController@buscaCliente');


/*
 + ================================= +
 + ROTAS FUNCIONÁRIOS                +
 + ================================= +
 */

Route::get('/painel/painel-funcionario', 'FuncionarioController@home');
Route::get('/painel/cadastro-funcionario', 'FuncionarioController@create');
Route::post('/painel/cadastro-funcionario', 'FuncionarioController@store');
Route::get('/painel/lista-funcionario', 'FuncionarioController@listarFuncionario');
Route::get('/painel/mostrar-funcionario/{id}', 'FuncionarioController@show');
Route::get('/painel/desativar-funcionario/{id}', 'FuncionarioController@destroy');
Route::post('/painel/atualizar-funcionario/{id}', 'FuncionarioController@update');

/*
 + ================================= +
 + ROTAS CARGOS                      +
 + ================================= +
 */

Route::get('/painel/painel-cargo', 'CargoController@home');
Route::get('/painel/cadastro-cargo', 'CargoController@create');
Route::post('/painel/cadastro-cargo', 'CargoController@store');
Route::get('/painel/lista-cargo', 'CargoController@listarCargo');
Route::get('/painel/mostrar-cargo/{id}', 'CargoController@show');
Route::get('/painel/desativar-cargo/{id}', 'CargoController@destroy');
Route::post('/painel/atualizar-cargo/{id}', 'CargoController@update');

/*
 + ================================= +
 +                                   +
 + ================================= +
 */