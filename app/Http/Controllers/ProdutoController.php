<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Produto;
use Illuminate\Http\Request;

use hortifruti\Http\Requests;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
