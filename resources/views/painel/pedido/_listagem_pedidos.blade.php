<div id="pedidos">
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            {{ Form::open(array('action'=> 'BuscaController@buscaPedido','method' => 'GET','id' => 'formBuscaProduto')) }}
            {{ Form::text('pedido',null,['class' => 'form-control','placeholder' => 'Informe o nome do cliente']) }}
        </div>
        <div class="col-md-3" style="padding-bottom: 10px;">
            {{ Form::submit('Buscar',['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-md-10">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Nº</th>
                    <th class="col-md-2">Cliente</th>
                    <th class="col-md-2">CNPJ</th>
                    <th class="col-md-2">Data Pedido</th>
                    <th class="text-center" >R$</th>
                    <th class="text-center">Qtd</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>
                            {{$pedido->id_pedido }}
                        </td>
                        <td>
                            {{ $pedido->cliente->nome_cliente }}
                        </td>
                        <td>
                            {{$pedido->cliente->cnpj}}
                        </td>
                        <td>
                            {{$pedido->created_at}}
                        </td>
                        <td class="text-center">
                            {{ $pedido->total_pedido }}
                        </td>
                        <td class="text-center">
                            {{ $pedido->produtos()->count() }}
                        </td>
                        <td class="text-center">
                            <a href="{{ action('PedidoController@show',array($pedido->id_pedido)) }}">
                                <button type="button" class="btn btn-default fa fa-eye"
                                        title="Visualizar"></button>
                            </a>
                            <a href="{{ action('PedidoController@edit',array($pedido->id_pedido)) }}">
                                <button type="button" class="btn btn-default fa fa-pencil-square-o "
                                        title="Alterar"></button>
                            </a>
                            <a href="{{ action('PedidoController@destroy',array($pedido->id_pedido)) }}">
                                <button class="fa fa-times btn btn-default"
                                        title="Remover"></button>
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