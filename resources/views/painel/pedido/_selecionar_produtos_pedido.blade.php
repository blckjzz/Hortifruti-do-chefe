{!! Form::open(array('action' => 'PedidoController@mostraResumoPedido', 'method' => 'POST')) !!}
<div class="row">
    <div class="col-md-7 col-sm-offset-1">
        <div class="row">
            <div class="col-md-3">
                {!! Form::submit('Realizar pedido', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                {!! Form::label('cliente','Clientes') !!}
                {!! Form::select('cliente',$clientes,  null , ['class'=> 'form-control','placeholder' => 'Selecione']) !!}
            </div>
        </div>
        <div id="produtos" class="row">
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ncm</th>
                        <th colspan="5">Quantidade do produto</th>
                        <th>Selecionar produto</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $p)
                        <tr>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->ncm}}</td>
                            <td>
                                {!!  Form::label("$p->id_produto[qtd_unidade]",'Quantidade Unidades') !!}
                                {!!  Form::number("produto[$p->id_produto][qtd_unidade]", null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$p->id_produto[qtd_kg]",'Quantidade KG') !!}
                                {!!  Form::number("produto[$p->id_produto][qtd_kg]", null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$p->id_produto[qtd_caixa]",'Quantidade Caixas') !!}
                                {!!  Form::number("produto[$p->id_produto][qtd_caixa]",null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$p->id_produto[qtd_bandeja]",'Quantidade Bandejas') !!}
                                {!!  Form::number("produto[$p->id_produto][qtd_bandeja]", null , ['class'=> 'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::label("$p->id_produto[qtd_duzia]",'Quantidade Duzias') !!}
                                {!! Form::number("produto[$p->id_produto][qtd_duzia]", null , ['class'=> 'form-control']) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>