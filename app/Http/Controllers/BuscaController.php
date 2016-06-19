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
    public function buscaProduto()
    {
        $nome = input::get('nome');
        $produtos = Produto::where('nome', 'LIKE', '%' . $nome . '%')->paginate(10);
        $title = 'Resultados da busca';
        return view('painel.produto.produto_listagem', compact('title', 'produtos'));
    }

    public function buscaPedido()
    {
        $nome = input::get('nome');
        $produtos = Pedido::where('', 'LIKE', '%' . $nome . '%')->paginate(10);
        $title = 'Resultados da busca';
        return view('painel.produto.produto_listagem', compact('title', 'produtos'));
    }

    public function buscaNome()
    {
        $nome = input::get('nome');
        $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(10);
        $title = 'Resultados da busca';
        return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));

    }

    public function busca()
    {
        if (Input::has('cliente')) {
            $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . Input::get('cliente') . '%')->paginate(10);
            $title = 'Resultados da busca';
            return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));
        } else
            if (Input::has('pedido')) {
                $id = input::get('pedido');
                $produtos = Pedido::where('id_pedido', $id)->paginate(10);
                $title = 'Resultados da busca';
                return view('painel.produto.produto_listagem', compact('title', 'produtos'));
            } else
                if (Input::has('produto')) {
                    $produtos = Produto::where('nome', 'LIKE', '%' . Input::get('produto') . '%')->paginate(10);
                    $title = 'Resultados da busca';
                    return view('painel.produto.produto_listagem', compact('title', 'produtos'));
                } else {
                    return redirect()->back();
                }


    }
}
