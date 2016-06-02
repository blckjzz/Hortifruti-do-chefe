@extends('painel.app')
@section('content')
    {{ dd($produtos) }}
    <h1>Lista de produtos</h1>
    @foreach($produtos as $p)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ncm</th>
                <th>Unidade</th>
                <th>Caixa</th>
                <th>Bandeja</th>
                <th>Duzia</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td>{{$p->nome}}</td>
                <td>{{$p->ncm}}</td>
                <td>R$:{{$p->valor_unidade}}</td>
                <td>R$:{{$p->valor_caixa}}</td>
                <td>R$:{{$p->valor_bandeja}}</td>
                <td>R$:{{$p->valor_duzia}}</td>
                <td></td>

            </tr>
    @endforeach
@endsection