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

    public function home()
    {
        $title = 'Painel Clientes';
        return view('painel.cliente.home_cliente',compact('title'));
    }

    public function listarClientes()
    {
        $title = 'Listagem de clientes';
        $clientes = Cliente::all();
        return view('painel.cliente.listagem_clientes',compact('title','clientes'));
    }


    public function create()
    {
        $tipoEstabelecimento = TipoEstabelecimento::all()->pluck('nome','id_tipo_estabelecimento');
        $title = 'Cadastro de Cliente';
        return view('painel.cliente.cadastro_cliente', compact('title','tipoEstabelecimento'));
    }


    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->tipoEstabelecimento()->associate($request->input('tipo_estabelecimento'));
        $cliente->save();
        return redirect()->action('ClienteController@listarClientes')
            ->with('sucessMessage', $cliente->nome_cliente .' foi cadastrado com sucesso');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->action('ClienteController@listarClientes')
            -> with('warningMessage','O cadastro do '. $cliente->nome_cliente . ' foi removido ');

    }
}
