@extends('layouts.admin_panel')
@section('title',$title)
@section('content')
    @include('painel.produto._form_novo_produto')
@endsection
@section('scripts')
        <!---VALIDAÇÃO CAD Produto --->
<script>
    $(document).ready(function () {
        $('#ncm').mask('9999999.999999', {placeholder: "9999999.99999"});
    });

    $(document).ready(function () {
        $('#nome').mask({pattern: /[0-9]/}, {placeholder: "Nome do produto..."});
    });
</script>
@endsection
