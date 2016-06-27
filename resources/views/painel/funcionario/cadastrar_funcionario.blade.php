@extends('painel.admin_panel')
@section('title',$title)
@section('content')
    @include('painel.funcionario._cadastrar_funcionario')
@endsection

@section('scripts')
        <!---VALIDAÇÃO CAD FUNC --->
<script>
    $('#cpf').mask('000.000.000-00', {placeholder: "000.000.000-00"});
    $('#telefone').mask('(00) 00000-0000');
    $('#data_nascimento').mask('00/00/0000', {placeholder: "99/99/9999"});
    $('#nome').mask({pattern: /[A-Za-z0-9]/}, {placeholder: "Nome do Funcionário..."});
</script>
@endsection