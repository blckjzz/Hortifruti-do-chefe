<?php

namespace hortifruti\Http\Controllers;

use hortifruti\Cargo;
use hortifruti\Funcionario;
use hortifruti\Http\Requests;
use hortifruti\Http\Requests\StoreFuncionarioRequest;
use hortifruti\User;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function home()
    {
        $title = 'Painel Funcionario';
        return view('painel.funcionario.home_funcionario',compact('title'));
    }

    public function listarFuncionario()
    {
        $title = 'Listagem de Funcionários';
        $cargos = Cargo::all()->pluck('nome','id_cargo');
        $funcionarios =  User::paginate(10);
        return view('painel.funcionario.listagem_funcionario',compact('title','funcionarios','cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Funcionário';
        $cargo = Cargo::all()->pluck('nome','id_cargo');
        return view('painel.funcionario.cadastrar_funcionario',compact('title','cargo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFuncionarioRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuncionarioRequest $request)
    {

        $funcionario = User::create([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'fk_cargo' => $request->input('cargo'),
            'cpf' => $request->input('cpf'),
            'data_nascimento' => $request->input('data_nascimento'),
            'telefone' => $request->input('telefone'),
            'password' => bcrypt($request->input('senha'))
            ,
        ]);
        return $funcionario->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
