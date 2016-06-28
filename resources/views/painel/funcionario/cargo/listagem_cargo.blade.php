@extends('layouts.admin_panel')
@section('title',$title)
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('content')
    @include('painel.funcionario.cargo._lista_cargo')
@endsection