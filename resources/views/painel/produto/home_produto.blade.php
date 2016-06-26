@extends('painel.admin_panel')
@section('title',$title)
@section('content')
    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ action('ProdutoController@create') }}">
                    <i class="fa fa-plus-square fa-5x"></i>
                    <h4>Cadastrar Produto</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ action('ProdutoController@listarProdutos') }}">
                    <i class="fa fa-list-ol fa-5x"></i>
                    <h4>Consultar Produtos</h4>
                </a>
            </div>
        </div>
    </div>
@endsection