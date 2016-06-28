<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <table class="table table-responsive table-bordered table-hover">
            <thead>
            <tr>
                <th class="col-md-3">Nome</th>
                <th class="col-md-3">Descrição</th>
                <th class="col-md-1">Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach($cargos as $c)
                    <tr>
                        <td>{{$c->nome}}</td>
                        <td>{{$c->descricao}}</td>
                        <td>
                            <a href="{{ action('CargoController@show',array($c->id_cargo)) }}">
                                <button type="button" class="btn btn-default fa fa-eye"
                                        title="Detalhes"></button>
                            </a>
                            <a href="{{ action('CargoController@destroy',array($c->id_cargo)) }}">
                                <button type="button" class="fa fa-times btn btn-default"
                                        title="Desativar"></button>
                            </a>
                        </td>
                    </tr>
            @endforeach
        </table>
        <div class="row">
            <div class="text-center">
                {{ $cargos->render() }}
            </div>
        </div>
    </div>
</div>