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
                        <th>Selecionar produto</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $p)
                        <tr>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->ncm}}</td>
                            <td class="text-center">
                                {!!  Form::checkbox("selecionados[]",$p->id_produto) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>