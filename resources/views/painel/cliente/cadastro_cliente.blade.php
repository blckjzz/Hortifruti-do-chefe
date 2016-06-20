@extends('painel.admin_panel')
@section('title',$title)
@section('content')
        @include('painel.cliente._form_cadastro')
@endsection

@section('scripts')
        <!---VALIDAÇÃO CAD CLIENTE --->
        <script>
                $('#cnpj').mask('00.000.000/0000-00', {placeholder: "00.000.000/0000-00"});
                $('#telefone').mask('(00) 00000-0000');
                $('#nome_cliente').mask({pattern: /[A-Za-z0-9]/}, {placeholder: "Nome do cliente..."});
        </script>
@endsection