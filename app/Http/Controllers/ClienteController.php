<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Http\Requests;
use hortifruti\TipoEstabelecimento;
use Illuminate\Http\Request;
use hortifruti\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarClientes()
    {
        return Cliente::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEstabelecimento = TipoEstabelecimento::all()->pluck('nome','id_tipo_estabelecimento');
        $title = 'Cadastro de Cliente';
        return view('painel.cliente.cadastro_cliente', compact('title','tipoEstabelecimento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClienteRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente;
        $cliente = $request->all();
        $cliente->tipoEstabelecimento($request->input('fk_tipo_estabelecimento'));
        dd($cliente);
        $cliente->save($request->all());
        return redirect()->action('ClienteController@listarClientes')->with('sucessMessage', $cliente->nome-cliente.' foi cadastrado com sucesso');
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
