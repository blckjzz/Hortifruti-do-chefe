<div class="row">
    <div class="col-md-10">
        {{--{!! Form::open(array('action' => array('PedidoController@store',$pedido), 'class'=>'form')) !!}--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-3 pull-right">--}}
        {{--{!! Form::submit('Confirmar pedido', ['class'=>'btn btn-primary']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-md-11">
                <h2>Pedidos realizados</h2>
                <hr>
            </div>
        </div>
        <div id="produtos" class="row">
            <div>
                <table class="col-sm-offset-1 table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th class="col-sm-1" >Nº</th>
                        <th class="col-md-2">Cliente</th>
                        <th class="col-md-2">CNPJ</th>
                        <th class="col-md-2">Realizado em</th>
                        <th class="col-md-2">Há</th>
                        <th class="col-md-2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pedidos->sortBy('created_at') as $pedido)
                        <tr>
                            <td>
                                {{$pedido->id_pedido }}
                            </td>
                            <td>
                                {{$pedido->cliente->nome_cliente }}
                            </td>
                            <td>
                                {{$pedido->cliente->cnpj}}
                            </td>
                            <td>
                                {{$pedido->created_at}}
                            </td>
                            <td>
                                {{$pedido->cliente->created_at->diffForHumans()}}
                            </td>
                            <td>
                                <a href="{{ action('PedidoController@show',array($pedido->id_produto)) }}">
                                    <button type="button" class="btn btn-default fa fa-eye"
                                            title="detalhes"></button>
                                </a>
                                <a href="{{ action('PedidoController@edit',array($pedido->id_produto)) }}">
                                    <button type="button" class="btn btn-default fa fa-pencil-square-o "title="Editar"></button>
                                </a>
                                <a href="{{ action('PedidoController@destroy',array($pedido->id_produto)) }}">
                                    <button type="button" class="fa fa-times btn btn-default"
                                            title="Deletar"></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tbody>
                </table>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>