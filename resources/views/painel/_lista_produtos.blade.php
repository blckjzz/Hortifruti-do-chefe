<div id="produtos">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Ncm</th>
            <th>Ações</th>

        </tr>
        </thead>
        <tbody>
        @foreach($produtos as $p)
            <tr>
                <td>{{$p->nome}}</td>
                <td>{{$p->ncm}}</td>
                <td>
                    <a href="{{ action('ProdutoController@show',array($p->id_produto)) }}">
                        <button type="button" class="btn btn-default glyphicon glyphicon-search"
                                title="detalhes"></button>
                    </a>
                    <a href="{{ action('ProdutoController@edit',array($p->id_produto)) }}">
                        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"
                                title="Editar"></button>
                    </a>
                    <a href="{{ action('ProdutoController@destroy',array($p->id_produto)) }}">
                        <button type="button" class="btn btn-default glyphicon glyphicon-trash"
                                title="Deletar"></button>
                    </a>
                </td>


            </tr>
        @endforeach
    </table>
</div>