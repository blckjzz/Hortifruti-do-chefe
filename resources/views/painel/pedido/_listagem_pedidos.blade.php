<div class="row">
    <div class="col-md-9 col-sm-offset-1">
        {{--{!! Form::open(array('action' => array('PedidoController@store',$pedido), 'class'=>'form')) !!}--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3 pull-right">--}}
                {{--{!! Form::submit('Confirmar pedido', ['class'=>'btn btn-primary']) !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <table class="table table-striped">
                <thead>
                <th> Cliente</th>
                <th> CNPJ</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $pedido->cliente->nome_cliente }}</td>
                    <td>{{ $pedido->cliente->cnpj }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="produtos" class="row">
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="col-md-2">Pedidos realizados</th>
                    </tr>
                    </thead>

                    @foreach($pedido->cliente as $cliente)
                        <tr>

                            <td>
                                {{$cliente->nome }}
                            </td>
                            <td>
                                {{$cliente->cnpj }}
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