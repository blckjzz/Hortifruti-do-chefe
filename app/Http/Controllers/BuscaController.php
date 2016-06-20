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

    public function busca()
    {
        if (Input::has('cliente')) {
            $nome = input::get('cliente');
            $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(10);
            $title = 'Clientes';
            return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));
        }
        if (Input::has('pedido')) {
            $id = input::get('pedido');
            $pedidos = Pedido::where('id_pedido', $id)->paginate(10);
            $title = 'Pedidos';
            return view('painel.pedido.listagem_pedidos', compact('title', 'pedidos'));
        }
        if (Input::has('produto')) {
            $nomeProduto = Input::get('produto');
            $produtos = Produto::where('nome', 'LIKE', '%' . $nomeProduto . '%')->paginate(10);
            $title = 'Produtos';
            return view('painel.produto.produto_listagem', compact('title', 'produtos'));
        }
        return redirect()->back();
    }

//
//    public function buscaProduto()
//    {
//        $nome = input::get('nome');
//        $produtos = Produto::where('nome', 'LIKE', '%' . $nome . '%')->paginate(10);
//        $title = 'Resultados da busca';
//        return view('painel.produto.produto_listagem', compact('title', 'produtos'));
//    }
//
//    public function buscaPedido()
//    {
//        $nome = input::get('nome');
//        $produtos = Pedido::where('', 'LIKE', '%' . $nome . '%')->paginate(10);
//        $title = 'Resultados da busca';
//        return view('painel.produto.produto_listagem', compact('title', 'produtos'));
//    }
//
//    public function buscaNome()
//    {
//        $nome = input::get('nome');
//        $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(10);
//        $title = 'Resultados da busca';
//        return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));
//
//    }
}
