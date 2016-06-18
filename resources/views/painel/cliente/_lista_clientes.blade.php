<div id="clientes">
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            {{ Form::open(array('action'=> 'BuscaController@buscaNome','method' => 'GET','id' => 'formBuscaCliente')) }}
            {{ Form::text('nome',null,['class' => 'form-control','placeholder' => 'Informe o nome do cliente']) }}
        </div>
        <div class="col-md-3" style="padding-bottom: 10px;">
            {{ Form::submit('Buscar',['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>#</th>

                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $c)
                    <tr>
                        <td>{{$c->nome_cliente}}</td>
                        <td>{{$c->cnpj}}</td>
                        <td>{{$c->telefone}}</td>
                        <td>
                            <a href="{{ action('ClienteController@show',array($c->id_cliente)) }}">
                                <button type="button" class="btn btn-default fa fa-eye"
                                        title="detalhes"></button>
                            </a>
                            <a href="{{ action('ClienteController@edit',array($c->id_cliente)) }}">
                                <button type="button" class="btn btn-default fa fa-pencil-square-o "
                                        title="Editar"></button>
                            </a>
                            <a href="{{ action('ClienteController@destroy',array($c->id_cliente)) }}">
                                <button type="button" class="fa fa-times btn btn-default"
                                        title="Deletar"></button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{ $clientes->render() }}
        </div>
    </div>
</div>
@section('scripts')

@endsection