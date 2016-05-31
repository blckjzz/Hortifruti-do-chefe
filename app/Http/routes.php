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

/**
 * Rotas Painel de Admnistração
 */
Route::resource('produto', 'ProdutoController');

Route::auth();

Route::get('/home', 'HomeController@index');
