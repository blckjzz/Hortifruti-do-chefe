@extends('painel.admin_panel')
@section('title',$title)
@section('content')
    <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ action('ProdutoController@create') }}">
                    <i class="fa fa-plus-circle fa-5x"></i>
                    <h4>Novo Produto</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ action('ProdutoController@listarProdutos') }}">
                    <i class="fa fa-list-ol fa-5x"></i>
                    <h4>Listagem de Produtos</h4>
                </a>
            </div>
        </div>
    </div>
@endsection