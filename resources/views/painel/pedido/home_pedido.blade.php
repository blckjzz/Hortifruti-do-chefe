@extends('painel.admin_panel')
@section('title',$title)
@section('content')

    <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ action('PedidoController@showPedidoForm') }}">
                    <i class="fa fa fa-cart-plus fa-5x"></i>
                    <h4>Novo pedido</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ action('PedidoController@consultarPedidos') }}">
                    <i class="fa fa-search fa-5x"></i>
                        </i><h4>Consultar pedidos</h4></a>
                </a>
            </div>
        </div>
    </div>
@endsection