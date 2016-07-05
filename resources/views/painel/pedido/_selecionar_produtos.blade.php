{!! Form::open(array('action' => 'PedidoController@adicionarQuantidades', 'method' => 'POST')) !!}
<div class="row">
    <div class="col-md-10 col-sm-offset-1">
        <div class="row">
            <div class="col-md-1">
                {!! Form::label('cliente','Clientes') !!}
            </div>
            <div class="col-md-5">
                {!! Form::select('cliente',$clientes,  null , ['class'=> 'form-control','placeholder' => 'Selecione']) !!}
            </div>
            <div class="col-md-3 pull-right">
                {!! Form::submit('Realizar pedido', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        <div class="row">
                <table id="tblItensPedido" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="col-md-3">Nome</th>
                        <th class="col-md-2">Ncm</th>
                        <th class="col-md-1">Selecionar produto</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $p)
                        <tr>
                            <td>{!! Form::label($p->id_produto,$p->nome)  !!}</td>
                            <td>{{$p->ncm}}</td>
                            <td class="text-center">
                                {!!  Form::checkbox("selecionados[]",$p->id_produto,null, ['id' => $p->id_produto]) !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        {!! Form::close() !!}
    </div>
</div>