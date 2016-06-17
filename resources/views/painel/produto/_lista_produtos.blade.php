<div id="produtos" class="row">
    <div class="col-md-9">
        <table class="col-sm-offset-1 table table-hover table-bordered">
            <thead>
            <tr>
                <th class="col-md-1">Nome</th>
                <th class="col-md-1">Ncm</th>
                <th class="col-sm-1">Ações</th>

            </tr>
            </thead>
            <tbody>
            @foreach($produtos as $p)
                <tr>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->ncm}}</td>
                    <td>
                        <a href="{{ action('ProdutoController@show',array($p->id_produto)) }}">
                            <button type="button" class="btn btn-default fa fa-eye"
                                    title="detalhes"></button>
                        </a>
                        <a href="{{ action('ProdutoController@edit',array($p->id_produto)) }}">
                            <button type="button" class="btn btn-default fa fa-pencil-square-o "
                                    title="Editar"></button>
                        </a>
                        <a href="{{ action('ProdutoController@destroy',array($p->id_produto)) }}">
                            <button type="button" class="fa fa-times btn btn-default"
                                    title="Deletar"></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>