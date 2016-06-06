<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Http\Requests;
use hortifruti\TipoEstabelecimento;
use Illuminate\Http\Request;
use hortifruti\Http\Requests\StoreClienteRequest;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarClientes()
    {
        $title = 'Listagem de clientes';
        $clientes = Cliente::all();
//        return view('painel.cliente.home',compact('title'));
//        return view('painel.cliente.listagem_clientes', compact('title'));
        return view('painel.cliente.listagem_clientes',compact('title','clientes'));
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
        $cliente = new Cliente($request->all());
        $cliente->tipoEstabelecimento()->associate($request->input('tipo_estabelecimento'));
//        dd($cliente);
        $cliente->save();
        return redirect()->action('ClienteController@listarClientes')->with('sucessMessage', $cliente->nome_cliente .' foi cadastrado com sucesso');
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
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->action('ClienteController@listarClientes')
            -> with('warningMessage','O cadastro do '. $cliente->nome_cliente . ' foi removido ');

    }
}
