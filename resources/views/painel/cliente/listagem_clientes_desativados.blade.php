@extends('painel.admin_panel')
@section('title',$title)
@section('content')
    @include('painel.cliente._lista_clientes_desativados')
@endsection