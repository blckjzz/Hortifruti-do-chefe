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
Auth::loginUsingId(1, true);

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
 + ================================= +
 + ROTAS HOME                      +
 + ================================= +
 */

Route::get('/painel/admin/home', function () {
    $title = 'Painel - Visão Administrador';
    return view('layouts.home.admin_home', compact('title'));
});
Route::get('/painel/gerente/home', function () {
    $title = 'Painel - Visão Gerente';
    return view('layouts.home.gerente_home', compact('title'));
});
Route::get('/painel/funcionario/home', function () {
    $title = 'Painel - Visão Funcionário comum';
    return view('layouts.home.funcionario_home', compact('title'));
});


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
Route::post('/painel/registrar', 'Auth\AuthController@register');


/*
 + ====================================== +
 + ROTAS PAINEL DE ADMNISTRAÇÃO - PRODUTO +
 + ====================================== +
 */

Route::get('/painel/produto/', 'ProdutoController@home');
Route::get('/painel/produto/lista', 'ProdutoController@listarProdutos');
Route::get('/painel/produto/novo', 'ProdutoController@create');
Route::post('/painel/produto/novo', 'ProdutoController@store');
Route::get('/painel/produto/mostrar/{id}', 'ProdutoController@show');
Route::get('/painel/produto/editar/{id}', 'ProdutoController@edit');
Route::get('/painel/produto/deletar/{id}', 'ProdutoController@destroy');
Route::post('/painel/produto/atualizar/{id}', 'ProdutoController@update');

/*
 + ==================================+
 + ROTAS PAINEL - PEDIDO             +
 + ==================================+
 */
Route::get('/painel/pedido/', 'PedidoController@home');
Route::get('/painel/pedido/novo', 'PedidoController@showPedidoForm');
Route::post('/painel/pedido/adicionar-quantidades', 'PedidoController@adicionarQuantidades');
Route::post('/painel/pedido/salvar/{id}', 'PedidoController@store');
Route::get('/painel/pedido/consultar', 'PedidoController@consultarPedidos');
Route::get('/painel/pedido/mostrar/{id}', 'PedidoController@show');
Route::get('/painel/pedido/editar/{id}', 'PedidoController@edit');
Route::get('/painel/pedido/deletar/{id}', 'PedidoController@destroy');
Route::post('/painel/pedido/atualizar/{id}', 'PedidoController@update');


/*
 + ============================ +
 + ROTAS CLIENTE                +
 + ============================ +
 */

Route::get('/painel/cliente/', 'ClienteController@home');
Route::get('/painel/cliente/cadastro', 'ClienteController@create');
Route::post('/painel/cliente/cadastro', 'ClienteController@store');
Route::get('/painel/cliente/lista', 'ClienteController@listarClientes');
Route::get('/painel/cliente/mostrar/{id}', 'ClienteController@show');
Route::get('/painel/cliente/desativar/{id}', 'ClienteController@destroy');
Route::post('/painel/cliente/atualizar/{id}', 'ClienteController@update');
Route::get('/painel/cliente/reativar/{id}', 'ClienteController@reativar');
Route::get('/painel/cliente/busca', 'BuscaController@buscaCliente');


/*
 + ================================= +
 + ROTAS FUNCIONÁRIOS                +
 + ================================= +
 */
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/painel/funcionario/', 'FuncionarioController@home');
    Route::get('/painel/funcionario/cadastro', 'FuncionarioController@create');
    Route::post('/painel/funcionario/cadastro', 'FuncionarioController@store');
    Route::get('/painel/funcionario/lista', 'FuncionarioController@listarFuncionario');
    Route::get('/painel/funcionario/mostrar/{id}', 'FuncionarioController@show');
    Route::get('/painel/funcionario/desativar/{id}', 'FuncionarioController@destroy');
    Route::post('/painel/funcionario/atualizar/{id}', 'FuncionarioController@update');
});
/*
 + ================================= +
 + ROTAS CARGOS                      +
 + ================================= +
 */

Route::get('/painel/cargo/', 'CargoController@home');
Route::get('/painel/cargo/cadastro', 'CargoController@create');
Route::post('/painel/cargo/cadastro', 'CargoController@store');
Route::get('/painel/cargo/lista', 'CargoController@listarCargo');
Route::get('/painel/cargo/mostrar/{id}', 'CargoController@show');
Route::get('/painel/cargo/desativar/{id}', 'CargoController@destroy');
Route::post('/painel/cargo/atualizar/{id}', 'CargoController@update');

