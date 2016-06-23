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
        if (Input::has('produto')) {
            $nomeProduto = Input::get('produto');
            $produtos = Produto::where('nome', 'LIKE', '%' . $nomeProduto . '%')->paginate(10);
            $title = 'Produtos';
            return view('painel.produto.produto_listagem', compact('title', 'produtos'));
        }
        return redirect()->back();
    }

    public function buscaPedido()
    {
        if (Input::has('pedido')) {
            $id = input::get('pedido');
            $pedidos = Pedido::where('id_pedido', $id)->paginate(10);
            $title = 'Pedidos';
            return view('painel.pedido.listagem_pedidos', compact('title', 'pedidos'));
        }


    }


    function buscaCliente()
    {
        if (Input::has('cliente') || Input::has('filtro')) {
            $filtro = input::get('filtro');
            $nome = input::get('cliente');
            if ($filtro == 1) {
                $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(10);
                $total = count($clientes);
                if (empty($total)) {
                    return "não encontrado nenhum cliente";
                }
            } else if ($filtro == 0) {
                $clientes = Cliente::withTrashed()->where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(10);
                $total = count($clientes);
                if (empty($total)) {
                    return "não encontrado nenhum cliente";
                }
            }
            $title = 'Clientes';
            return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));
        }
    }
}
