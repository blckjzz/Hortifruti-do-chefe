<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cliente;
use hortifruti\Http\Requests;
use hortifruti\TipoEstabelecimento;
use hortifruti\Http\Requests\StoreClienteRequest;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function home()
    {
        $title = 'Painel Clientes';
        return view('painel.cliente.home_cliente',compact('title'));
    }

    public function listarClientes()
    {
        $title = 'Listagem de clientes';
        $clientes = Cliente::paginate(10);
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
        return redirect()->action('ClienteController@listarClientes')->with('successMessage', $cliente->nome_cliente .' foi cadastrado com sucesso');
    }


    public function show($id)
    {
        $cliente = Cliente::find($id);
        $title = 'Detalhe Cliente '.$cliente->nome_cliente;
        $tipoEstabelecimento = TipoEstabelecimento::all()->pluck('nome','id_tipo_estabelecimento');
        return view('painel.cliente.detalhe_cliente',compact('cliente','title','tipoEstabelecimento'));
    }


    public function update(StoreClienteRequest $request, $id)
    {
        $cliente =  Cliente::find($id);
        $cliente->update($request->all());
        return redirect()->action('ClienteController@listarClientes')->with('successMessage','O cadastro do '. $cliente->nome_cliente . ' foi atualizado. ');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return Redirect::to('/painel/lista-clientes')->with('warningMessage','O cadastro do '. $cliente->nome_cliente . ' foi desativado. ');

    }

    public function reativar($id)
    {
        $cliente = Cliente::find($id);
        $cliente->restore();
        return Redirect::to('/painel/lista-clientes')->with('successMessage','O cadastro do '. $cliente->nome_cliente . ' foi reativado. ');
    }


}
