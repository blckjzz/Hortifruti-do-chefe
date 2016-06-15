<div id="produtos">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Ncm</th>
            <th  class="col-lg-2">Ações</th>

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
                        <button type="button" class="btn btn-default fa fa-pencil-square-o "title="Editar"></button>
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