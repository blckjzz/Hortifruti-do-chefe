<div class="row">
    <div class="col-md-9 col-sm-offset-1">
    {!! Form::open(array('action' => array('PedidoController@store',$pedido), 'class'=>'form')) !!}
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
                        <th class="col-md-2">Produto</th>
                        <th>Ncm</th>
                        <th>Tipo</th>
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
                                {{$produto->tipo->nome }}
                            </td>
                            <td>
                                {!!  Form::label("$produto->id_produto[qtd_unidade]",'Unidades') !!}
                                {!!  Form::number("quantidade[$produto->id_produto][qtd_unidade]", null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$produto->id_produto[qtd_kg]",'Quilos') !!}
                                {!!  Form::number("quantidade[$produto->id_produto][qtd_kg]", null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$produto->id_produto[qtd_caixa]",'Caixas') !!}
                                {!!  Form::number("quantidade[$produto->id_produto][qtd_caixa]",null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$produto->id_produto[qtd_bandeja]",'Bandejas') !!}
                                {!!  Form::number("quantidade[$produto->id_produto][qtd_bandeja]", null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$produto->id_produto[qtd_duzia]",'Duzias') !!}
                                {!! Form::number("quantidade[$produto->id_produto][qtd_duzia]", null , ['class'=> 'form-control']) !!}
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