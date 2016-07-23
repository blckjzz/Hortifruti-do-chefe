<div class="row">
    <div class="col-md-9 col-sm-offset-1">
        {{--//Form::open(array('action' => array('Controller@method', $user->id)))--}}
    {!! Form::open(array('action' => array('PedidoController@store', $pedido->id_pedido))) !!}
        <div class="row">
            <div class="col-md-3 pull-right">
                {!! Form::submit('Confirmar pedido', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <th>   Cliente   </th>
                <th>     CNPJ   </th>
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
                        <th class="col-md-3">Produto</th>
                        <th class="col-md-2">Ncm</th>
                        <th class="col-md-2">Unidade de medida</th>
                        <th class="col-md-1">Quantidade</th>
                    </tr>
                    </thead>

                    @foreach($pedido->produtos as $produto)
                        <tr>

                            <td>
                                {{$produto->nome }}
                            </td>
                            <td>
                                {{$produto->ncm }}
                            </td>
                            <td>
                                {!! Form::select("produto[$produto->id_produto][tipo_unidade]", $unidades,  null , ['class'=> 'form-control','placeholder' => 'Selecione']) !!}
                            </td>
                            <td>
                                {!!  Form::number("produto[$produto->id_produto][quantidade]", null , ['class'=> 'form-control']) !!}
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