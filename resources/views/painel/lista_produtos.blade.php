@extends('painel.app')
@section('title',$title)
@section('content')
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Ncm</th>
                {{--<th>R$ Unidade</th>--}}
                {{--<th>R$ Caixa</th>--}}
                {{--<th>R$ Bandeja</th>--}}
                {{--<th>R$ Duzia</th>--}}
                {{--<th>R$ Tipo</th>--}}
                <th>Ações</th>

            </tr>
            </thead>
            <tbody>
            @foreach($produtos as $p)
            <tr>

                <td>{{$p->nome}}</td>
                <td>{{$p->ncm}}</td>
                {{--<td>{{$p->valor_unidade}}</td>--}}
                {{--<td>{{$p->valor_caixa}}</td>--}}
                {{--<td>{{$p->valor_bandeja}}</td>--}}
                {{--<td>{{$p->valor_duzia}}</td>--}}
                {{--<td></td>--}}
                <td>
                    <a href="{{ action('ProdutoController@show',array($p->id_produto)) }}">
                        <button  type="button" class="btn btn-default glyphicon glyphicon-search" title="detalhes"></button>
                    </a>
                    <a href="{{ action('ProdutoController@edit',array($p->id_produto)) }}">
                        <button  type="button" class="btn btn-default glyphicon glyphicon-pencil" title="Editar"></button>
                    </a>
                    <a href="{{ action('ProdutoController@destroy',array($p->id_produto)) }}">
                        <button  type="button" class="btn btn-default glyphicon glyphicon-trash" title="Deletar"></button>
                    </a>
                </td>



            </tr>
    @endforeach
@endsection