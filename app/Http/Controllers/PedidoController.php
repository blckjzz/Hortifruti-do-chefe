<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Http\Requests\PedidoRequest;
use hortifruti\Http\Requests\Request;
use hortifruti\Pedido;
use hortifruti\Produto;
use hortifruti\Http\Requests\StorePedidoRequest;
use hortifruti\TipoUnidade;

class PedidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function home()
    {
        $title = 'Painel Pedidos';
        return view('painel.pedido.home_pedido', compact('title'));
    }

    public function consultarPedidos()
    {
        $title = 'Consulta de pedidos';
        $pedidos = Pedido::all();
        return view('painel.pedido.listagem_pedidos', compact('title', 'pedidos'));
    }

    public function showPedidoForm()
    {
        $produtos = Produto::all();
        $clientes = Cliente::all()->pluck('nome_cliente', 'id_cliente');
        $pedido = new Pedido();
        $title = 'Montar pedido';
        return view('painel.pedido.montar_pedido', compact('title', 'produtos', 'clientes', 'pedido'));
    }


    public function adicionarQuantidades(StorePedidoRequest $request)
    {
        $idProdutosSelecionados = $request->input("selecionados");


        if (empty($idProdutosSelecionados)) {
            return redirect()->back()->with('warningMessage', 'Favor, selecionar ao menos um produto');
        } else {
            $pedido = Pedido::create([
                'fk_id_cliente' => $request->input("cliente")
            ]);

            foreach ($idProdutosSelecionados as $idProd) {
                $produto = Produto::find($idProd);
                $pedido->produtos()->attach($produto);
                $pedido->save();
            }

            $unidades = TipoUnidade::all()->pluck('descricao_unidade', 'id_unidade');
            $title = 'Resumo do pedido ';
            return view('painel.pedido.resumo_pedido', compact('title', 'pedido', 'unidades'));
        }
    }


    public function store($id, PedidoRequest $request)
    {
        $pedido = Pedido::find($id);
        $qtds = $request->input('produto');
        foreach ($pedido->produtos as $produto) {
            $produto->pivot->quantidade = $qtds[$produto->id_produto]['quantidade'];
            $produto->pivot->fk_tipo_unidade = $qtds[$produto->id_produto]['tipo_unidade'];
            $produto->pivot->save();

            dd($pedido->getTotalPrice());
        }
        return redirect()->action('PedidoController@consultarPedidos')->
        with('successMessage', 'O pedido do cliente: ' . $pedido->cliente->nome_cliente . ' foi registrado com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->produtos()->detach();
        return redirecT()->action('PedidoController@consultarPedidos')->with('warningMessage',
            "O pedido de numero: " . $pedido->id_pedido . " do cliente " . $pedido->cliente->nome_cliente . " removido.");
    }
}
