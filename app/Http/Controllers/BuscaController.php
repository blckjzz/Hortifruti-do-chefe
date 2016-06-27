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
        $title = 'Clientes';
        $filtro = input::get('filtro');
        $nome = input::get('cliente');
        if ($filtro == 1) {
            return $this->buscaAtivos($nome, $title);
        }

        if ($filtro == 0) {
            return $this->buscaDesativados( $nome, $title);
        }

    }


    /**
     * @param $title
     * @param $nome
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function buscaDesativados($nome, $title)
    {
        //busca todos desativados
        $clientes = Cliente::onlyTrashed()->where('nome_cliente', 'LIKE', '%'.$nome.'%')->paginate(10);
        if ($clientes->isEmpty()) {
            return view('painel.cliente.listagem_clientes_desativados', compact('title', 'clientes'))->with('warningMessage', $nome . ' não foi encontrado.');
            //MENSAGENS DE ERRO NÃO ESTÃO SENDO MOSTRADAS
        } else {
            return view('painel.cliente.listagem_clientes_desativados', compact('title', 'clientes'));
            //não encontrou ngm
        }

    }

    /**
     * @param $nome
     * @param $title
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function buscaAtivos($nome, $title)
    {
        //com filtro + nome
        $clientes = Cliente::where('nome_cliente', 'LIKE', '%' . $nome . '%')->paginate(10);
        if ($clientes->isEmpty()) {
            //não encontrou ngm
            return view('painel.cliente.listagem_clientes', compact('title', 'clientes'))->with('warningMessage', $nome . ' não foi encontrado.');
            //encontrou
        } else {
            return view('painel.cliente.listagem_clientes', compact('title', 'clientes'));
        }

    }
}


