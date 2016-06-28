<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\ItemPedido;
use hortifruti\Pedido;
use Illuminate\Http\Request;
use hortifruti\Http\Requests;
use hortifruti\Produto;
use hortifruti\Http\Requests\StorePedidoRequest;

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
        $title ='Consulta de pedidos';
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


    public function mostraResumoPedido(StorePedidoRequest $request)
    {
        //todos produtos recuperados via post
        $todosProdutos = $request->input('produto');
        //produtrar dentro do array produtos o indice equivalente ao id dos produtos selecionados
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
            $title = 'Resumo do pedido ';
            return view('painel.pedido.resumo_pedido', compact('title', 'pedido'));
        }
    }


    public function store(StorePedidoRequest $request, $idPedido)
    {
        $total = array(['total_kg', 'total_caixa', 'total_bandeja', 'total_duzia', 'total_unidade']);

        $pedido = Pedido::find($idPedido);
        $quantidades = $request->input('quantidade');
        foreach ($pedido->produtos as $produto) {
            $produto->pivot->qtd_kg = $quantidades[$produto->id_produto]['qtd_kg'];
            $produto->pivot->qtd_caixa = $quantidades[$produto->id_produto]['qtd_caixa'];
            $produto->pivot->qtd_bandeja = $quantidades[$produto->id_produto]['qtd_bandeja'];
            $produto->pivot->qtd_duzia = $quantidades[$produto->id_produto]['qtd_duzia'];
            $produto->pivot->qtd_unidade = $quantidades[$produto->id_produto]['qtd_unidade'];
            $pedido->save();

            $total['total_kg'] = ($quantidades[$produto->id_produto]['qtd_kg']) * ($produto->valor_kg);
            $total['total_caixa'] = ($quantidades[$produto->id_produto]['qtd_caixa']) * ($produto->valor_caixa);
            $total['total_bandeja'] = ($quantidades[$produto->id_produto]['qtd_bandeja']) * ($produto->valor_bandeja);
            $total['total_duzia'] = ($quantidades[$produto->id_produto]['qtd_unidade']) * ($produto->valor_duzia);
            $total['total_unidade'] = ($quantidades[$produto->id_produto]['qtd_unidade']) * ($produto->valor_unidade);
        }
        $pedido->total_pedido = array_sum($total);
        $pedido->save();
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
        //
    }
}
