{!! Form::open(array('action' => 'PedidoController@store', 'method' => 'POST')) !!}
<div class="row">
    <div class="col-md-6 col-lg-offset-1">
        <div class="row">
            <div class="col-md-3">
                {!! Form::submit('Realizar pedido', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        <div id="produtos" class="row">
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ncm</th>
                        <th>Selecione</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $p)
                        <tr>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->ncm}}</td>
                            <td>
                                {!!  Form::checkbox($p->nome, $p->id_produto, null , ['class'=> '']) !!}
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>