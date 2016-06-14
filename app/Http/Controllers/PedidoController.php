<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\ItemPedido;
use hortifruti\Pedido;
use Illuminate\Http\Request;
use hortifruti\Http\Requests;
use hortifruti\Produto;
use hortifruti\Http\Requests\StorePedidoRequest;
use Illuminate\Support\Facades\Input;

class PedidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
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
            return view('painel.pedido.resumo_pedido', compact('title','pedido'));
        }
    }



    public function store(StorePedidoRequest $request,$pedido)
    {
        $p = Pedido::find($pedido);
        $quantidades = $request->input('quantidade');
        foreach($quantidades as $qtd)
        {
            var_dump($quantidades);
            $produto = Produto::find($qtd);
            dd($quantidades[$produto->id_produto]);
            $pedido->pivot->qtd_kg = $quantidades[$produto->id_produto];
            $pedido->pivot->qtd_caixa = $qtd[qtd_caixa] ;
            $pedido->pivot->qtd_bandeja = $qtd[qtd_bandeja] ;
            $pedido->pivot->qtd_duzia = $qtd[qtd_duzia] ;
            $pedido->pivot->qtd_unidade =  $qtd[qtd_unidade];
            dd($produto);
            dd($pedido);
        }
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
