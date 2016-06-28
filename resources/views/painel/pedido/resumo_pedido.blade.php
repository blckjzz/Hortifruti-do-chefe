@extends('layouts.admin_panel')
@section('title',$title)
@section('content')
        @include('painel.pedido._resumo_pedido')
@endsection
@section('scripts')
        <!--valida campo qtd -->
<script>
        $('.qtd').mask({pattern: /[0-9]/});
</script>
@endsection