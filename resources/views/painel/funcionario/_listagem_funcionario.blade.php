<div id="funcionarios">
    {{ Form::open(array('action'=> 'BuscaController@buscaCliente','method' => 'GET','id' => 'formBuscaCliente')) }}
    <div class="row">
        <div class="col-md-offset-1 col-md-1">
            {{ Form::label('filtro','Filtro:') }}
        </div>
        <div class="col-md-2">
            {{ Form::select('filtro',$cargos, null, ['class' => 'form-control','placeholder'=>'Selecione']) }}
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
            <table class="table table-responsive table-bordered table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th class="col-md-2">Telefone</th>
                    <th class="col-md-1">Cargo</th>
                    <th class="col-md-1">Ações</th>

                </tr>
                </thead>
                <tbody>
                @if(!Session::has('warningMessage'))
                    @foreach($funcionarios as $f)
                        <tr>
                            <td>{{$f->nome}}</td>
                            <td>{{$f->cpf}}</td>
                            <td>{{$f->telefone}}</td>
                            <td>{{$f->cargo->nome }}</td>
                            <td>
                                <a href="{{ action('FuncionarioController@show',array($f->id_funcionario)) }}">
                                    <button type="button" class="btn btn-default fa fa-eye"
                                            title="Detalhes"></button>
                                </a>
                                <a href="{{ action('FuncionarioController@destroy',array($f->id_funcionario)) }}">
                                    <button type="button" class="fa fa-times btn btn-default"
                                            title="Desativar"></button>
                                </a>
                            </td>
                        </tr>
                @endforeach
                @endif
            </table>
            <div class="row">
                <div class="text-center">
                    {{ $funcionarios->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
