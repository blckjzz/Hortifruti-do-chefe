<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Pedido;
use Illuminate\Http\Request;
use hortifruti\Http\Requests;
use hortifruti\Produto;
use hortifruti\Http\Requests\StorePedidoRequest;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPedidoForm()
    {
        $produtos = Produto::all();
        $clientes = Cliente::all()->pluck('nome_cliente','id_cliente');
        $pedido = new Pedido();
        $title = 'Montar pedido';
        return view('painel.pedido.montar_pedido', compact('title', 'produtos','clientes','pedido'));
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePedidoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function mostraResumoPedido(StorePedidoRequest $request)
    {
        dd($idProdutosSelecionados = $request->input('selecionados'));
        foreach($idProdutosSelecionados as $id){
            $produtosSelecionados = $request->only("produto[$id]");
        }
        dd($produtosSelecionados);
        //produtrar dentro do array produtos o indice equivalente ao id dos produtos selecionados



        dd();
        dd($request->all());
        $title = 'Resumo do pedido ';
        return view('painel.pedido.resumo_pedido',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePedidoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePedidoRequest $request)
    {
        dd($request->all());
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
