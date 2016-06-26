@extends('painel.admin_panel')
@section('title',$title)
@section('content')

    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ action('ClienteController@create') }}">
                    <i class="fa fa-user-plus fa-5x"></i>
                    <h4>Cadastrar Cliente</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ action('ClienteController@listarClientes') }}">
                    <i class="fa fa-list-ol fa-5x"></i>
                        </i><h4>Consultar Clientes</h4></a>
                </a>
            </div>
        </div>
    </div>
@endsection