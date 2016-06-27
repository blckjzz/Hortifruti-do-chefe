<div id="clientes">
    {{ Form::open(array('action'=> 'BuscaController@buscaCliente','method' => 'GET','id' => 'formBuscaCliente')) }}
    <div class="row">
        <div class="col-md-offset-1 col-md-1">
            {{ Form::label('filtro','Filtro:') }}
        </div>
        <div class="col-md-2">
            {{ Form::select('filtro', array('1' => 'Ativo', '0' => 'Desativado'), null, ['class' => 'form-control'],1) }}
        </div>

    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            {{ Form::text('cliente',null,['class' => 'form-control','placeholder' => 'Informe o nome do cliente']) }}
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
                    <th>Ações</th>

                </tr>
                </thead>
                <tbody>
                @if(!Session::has('warningMessage'))
                    @foreach($clientes as $c)
                        <tr>
                            <td>{{$c->nome_cliente}}</td>
                            <td>{{$c->cnpj}}</td>
                            <td>{{$c->telefone}}</td>
                            <td>
                                <a href="{{ action('ClienteController@show',array($c->id_cliente)) }}">
                                    <button type="button" class="btn btn-default fa fa-eye"
                                            title="Detalhes"></button>
                                </a>
                                <a href="{{ action('ClienteController@reativar',array($c->id_cliente)) }}">
                                    <button type="button" class="fa fa-check-circle btn btn-default"
                                            title="Ativar"></button>
                                </a>
                            </td>
                        </tr>
                @endforeach
                @endif
            </table>
            <div class="row">
                <div class="text-center">
                    {{ $clientes->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
