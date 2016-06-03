<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Http\Requests\StoreProdutoRequest;
use hortifruti\Produto;
use hortifruti\TipoProduto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function  __construct(){

        $this->middleware('auth');
        $this->middleware('admin');

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listarProdutos()
    {

        $produtos = Produto::all(); //agrupar pelo tipo 'fruta,verdura' para separar na view
        return view('painel.lista_produtos',compact('produtos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Adicionar produto';
        $tiposProduto = TipoProduto::all()->pluck('nome','id_tipo_produto');
        return view('painel._form_criar_produto',compact('title','tiposProduto'));
    }


    public function store(StoreProdutoRequest $request)
    {
        $tipo = new TipoProduto();
        $tipo->id_tipo_produto = $request->input('tipo');
        $produto = new Produto($request->all());
        $produto->save($tipo);


        return redirect()->action('ProdutoController@listarProdutos')->with('successMessage', '$produto->nome foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
