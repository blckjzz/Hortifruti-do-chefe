<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Produto;
use hortifruti\Pedido;
use Illuminate\Http\Request;

use hortifruti\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BuscaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


    function buscaCliente()
    {
        $title = 'Clientes';
        $filtro = input::get('filtro');
        $nome = input::get('cliente');
        if ($filtro == 1) {
            return $this->buscaAtivos($nome, $title);
        }
        if ($filtro == 0) {
            return $this->buscaDesativados();
        }

    }

    
    public function buscaDesativados()
    {
        $title = 'Desativados';
        $clientes = Cliente::onlyTrashed()->get();
        return view('painel.cliente.listagem_clientes_desativados', compact('title', 'clientes'));
    }

    /**
     * @param $nome
     * @param $title
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function buscaAtivos($nome, $title)
    {
        $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . $nome . '%')->get();
        return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));

    }
}


