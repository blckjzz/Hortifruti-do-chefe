@extends('painel.admin_panel')
@section('title',$title)
@section('content')

    <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ action('ClienteController@create') }}">
                    <i class="fa fa-user-md fa-5x"></i>
                    <h4>Novo Cliente</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ action('ClienteController@listarClientes') }}">
                    <i class="fa fa-list-ol fa-5x"></i>
                        </i><h4>Listagem de Clientes</h4></a>
                </a>
            </div>
        </div>
    </div>
@endsection