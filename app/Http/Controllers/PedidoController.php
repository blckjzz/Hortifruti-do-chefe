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

        //todos produtos recuperados via post
        $todosProdutos = $request->input('produto');
        //produtrar dentro do array produtos o indice equivalente ao id dos produtos selecionados
        $idProdutosSelecionados = $request->input("selecionados");

        if (empty($idProdutosSelecionados)) {
            return redirect()->back()->with('warningMessage', 'Favor, selecionar ao menos um produto');
        } else {
//            //recupera todos produtos selecionados do banco
//            $produtosDoBanco = new Produto();
//            $produtosDoBanco = Produto::findMany($idProdutosSelecionados);

            // recebe a quantidade de cada produto e constroi um array com suas quantidades
            foreach ($idProdutosSelecionados as $id) {
                $idProdutoQtds[$id] = $todosProdutos[$id]; // array com id e qtds para cada produto
            }

            dd($idProdutoQtds);
//            dd($idProdutoQtds); // array com id e qtds para cada produto
            $pedido[] = new Pedido();

            var_dump($idProdutoQtds);
            //idProdutosQtd: indice do array = id do produto
            //idProdutosQtd: valores
            foreach ($idProdutoQtds as $id) {
                print_r($id);
            }
//            $pedido[]->qtd_unidade = $id[qtd_unidade];
//            $pedido[]->qtd_kg = $id[qtd_kg];
//            $pedido[]->qtd_caixa = $id[qtd_caixa];
//            $pedido[]->qtd_bandeja = $id[qtd_bandeja];
//            $pedido[]->qtd_duzia = $id[qtd_duzia];
//            $pedido->qtd_unidade = $id->qtd_unidade;
//            $pedido->qtd_kg = $id->qtd_kg;
//            $pedido->qtd_caixa = $id->qtd_caixa;
//            $pedido->qtd_bandeja = $id->qtd_bandeja;
//            $pedido->qtd_duzia = $id->qtd_duzia;
//             ['fk_id_cliente','fk_tipo_produto', 'ncm', 'qtd_unidade', 'qtd_kg', 'qtd_caixa', 'qtd_bandeja', 'qtd_duzia'];
            //   associar produto ao pedido  e associar as qtds
            //associa pedido ao cliente
                $pedido->cliente()->associate($request->input('cliente'));

            $title = 'Resumo do pedido ';
            return view('painel.pedido.resumo_pedido', compact('title', 'produtosDoBanco', 'idProdutoQtds'));
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
