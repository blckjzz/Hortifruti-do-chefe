@extends('painel.admin_panel')
@section('title',$title)
@section('content')

    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ action('FuncionarioController@create') }}">
                    <i class="fa fa fa-wrench fa-5x"></i>
                    <h4>Cadastrar Funcionário</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ action('FuncionarioController@listarFuncionario') }}">
                    <i class="fa fa-list-alt fa-5x"></i>
                    </i><h4>Consultar Funcionários</h4></a>
                </a>
            </div>
        </div>
    </div>
@endsection