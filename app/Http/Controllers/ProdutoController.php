<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Http\Requests\StoreProdutoRequest;
use hortifruti\Produto;
use hortifruti\TipoProduto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function __construct()
    {

        $this->middleware('admin',['except' => ['listarProdutos']]);
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listarProdutos()
    {

        $title = 'Listagem de Produtos';
        $produtos = Produto::all(); //agrupar pelo tipo 'fruta,verdura' para separar na view
        return view('painel.produto.produto_listagem', compact('produtos', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Cadastro de produto';
        $tiposProduto = TipoProduto::all()->pluck('nome', 'id_tipo_produto');
        $produto = new Produto();
        return view('painel.produto.produto_novo', compact('title', 'tiposProduto', 'produto'));
    }


    public function store(StoreProdutoRequest $request)
    {
        $produto = new Produto($request->all());
        $tipoProduto = $request->input('tipo');
        $produto->tipo()->associate($tipoProduto);
        $produto->save();
        return redirect()->action('ProdutoController@listarProdutos')->
        with('successMessage', $produto->nome . ' foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id_produto
     * @return Response
     */
    public function show($id_produto)
    {
        $produto = Produto::find($id_produto);
        $tiposProduto = $produto->tipo()->pluck('nome', 'id_tipo_produto');
        $title = 'Detalhes ' . $produto->nome;
        return view('painel.produto.produto_detalhe', compact('produto', 'title', 'tiposProduto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $title = 'Editar Produto -  ' . $produto->nome;
        $tiposProduto = TipoProduto::all()->pluck('nome', 'id_tipo_produto');
        return view('painel.produto.produto_editar', compact('title', 'tiposProduto', 'produto'));
    }

    /**
     * @param $id
     * @param StoreProdutoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, StoreProdutoRequest $request)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->action('ProdutoController@listarProdutos')
            ->with('warningMessage', $produto->nome . ' foi alterado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@listarProdutos')
            ->with('warningMessage', $produto->nome.' foi removido.');
    }
}
