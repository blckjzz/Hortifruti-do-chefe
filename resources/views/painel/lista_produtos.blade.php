@extends('painel.app')
@section('content')
    <h1>Lista de produtos</h1>
    @foreach($produtos as $p)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ncm</th>
                <th>R$ Unidade</th>
                <th>R$ Caixa</th>
                <th>R$ Bandeja</th>
                <th>R$ Duzia</th>
                <th>R$ Tipo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td>{{$p->nome}}</td>
                <td>{{$p->ncm}}</td>
                <td>{{$p->valor_unidade}}</td>
                <td>{{$p->valor_caixa}}</td>
                <td>{{$p->valor_bandeja}}</td>
                <td>{{$p->valor_duzia}}</td>
                <td></td>

            </tr>
    @endforeach
@endsection