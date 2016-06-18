<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Produto;
use Illuminate\Http\Request;

use hortifruti\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BuscaController extends Controller
{
    public function buscaProduto() {
        $nome = input::get('nome');
        $produtos = Produto::where('nome', 'LIKE', '%'.$nome.'%')->paginate(10);
        $title = 'Resultados da busca';
        return view('painel.produto.produto_listagem', compact('title','produtos'));
    }

    public function buscaPedido(){
        $nome = input::get('nome');
        $produtos = Pedido::where('', 'LIKE', '%'.$nome.'%')->paginate(10);
        $title = 'Resultados da busca';
        return view('painel.produto.produto_listagem', compact('title','produtos'));
    }

    public function buscaNome() {
        $nome = input::get('nome');
        $clientes = Cliente::where('nome_cliente', 'LIKE', '%'.$nome.'%')->paginate(10);
        $title = 'Resultados da busca';
        return view('painel.cliente.listagem_clientes', compact('title','clientes'));

    }
}
