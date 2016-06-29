@extends('layouts.admin_panel')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('title',$title)
@section('content')
    @include('painel.pedido._listagem_pedidos')
@endsection
@section('scripts')
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ URL::asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            table = $('#tblListaPedidos').DataTable({
                "paging": true,
                "order": [0, 'asc'],
                "columns": [
                    null,
                    null,
                    {"orderable": false},
                    null,
                    null,
                    null,
                    {"orderable": false},
                ],
                language: {
                    "decimal": "",
                    "emptyTable": "Nenhum registro disponível na tabela",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros.",
                    "infoEmpty": "Mostrando 0 a 0 de 0 registros.",
                    "infoFiltered": "(filtrado do total de _MAX_)",
                    "infoPostFix": "",
                    "thousands": ".",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "search": "Busca",
                    "zeroRecords": "Nenhum registro foi encontrado",
                    paginate: {
                        first: 'Primeira',
                        previous: 'Anterior',
                        next: 'Próxima',
                        last: 'Última'
                    }
                }
            });
        });
    </script>
@endsection