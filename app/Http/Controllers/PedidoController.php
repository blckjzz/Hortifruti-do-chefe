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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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


//    public function create()
//    {
//        $pedido = Pedido::create([
//            'fk_id_cliente' => \Input::get('cliente')
//        ]);
//
//        return view('painel')
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePedidoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function mostraResumoPedido(StorePedidoRequest $request)
    {
        //todos produtos recuperados via post
        $todosProdutos = $request->input('produto');
        //produtrar dentro do array produtos o indice equivalente ao id dos produtos selecionados
        $idProdutosSelecionados = $request->input("selecionados");

        if (empty($idProdutosSelecionados)) {
            return redirect()->back()->with('warningMessage', 'Favor, selecionar ao menos um produto');
        } else {
            // recebe a quantidade de cada produto e constroi um array com suas quantidades
//            foreach ($idProdutosSelecionados as $id) {
//                $idProdutoQtds[$id] = $todosProdutos[$id]; // array com id e qtds para cada produto
//            }

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
