@extends('voyager::master')

@section('page_title', 'Historial de movimientos')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-book"></i>
        Historial de movimientos
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Motivo</th>
                                        <th>Desde cuando</th>
                                        <th>Sìntomas</th>
                                        <th>Diagnòstico</th>
                                        <th>Pronòstico</th>
										<th>Tratamiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
										    <td>{{ $item->pet ? $item->pet->name : '' }}</td>
											<td>{{ $item->reason }}</td>
                                            <td>{{ $item->since_when }}</td>
                                            <td>{{ $item->symptoms }}</td>
											<td>{{ $item->diagnosis }}</td>
											<td>{{ $item->forecast }}</td>
											<td>{{ $item->treatment }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <!-- DataTables -->
    <script>
        $('#dataTable').DataTable({
            destroy: false,
            pageLength: 10,
            order: [
                [1, 'desc']
            ], //ordenar de forma descendente
            language: {
                sProcessing: "Procesando...",
                sLengthMenu: "Mostrar _MENU_ registros",
                sZeroRecords: "No se encontraron resultados",
                sEmptyTable: "Ningún dato disponible en esta tabla",
                sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                sInfoPostFix: "",
                sSearch: "Buscar:",
                sUrl: "",
                sInfoThousands: ",",
                sLoadingRecords: "Cargando...",
                oPaginate: {
                    sFirst: "Primero",
                    sLast: "Último",
                    sNext: "Siguiente",
                    sPrevious: "Anterior",
                },
                oAria: {
                    sSortAscending: ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending: ": Activar para ordenar la columna de manera descendente",
                },
            },
            lengthMenu: [
                [5, 10, 15],
                [5, 10, 15],
            ],
        });

        function reload() {
            var initial = $('#initial_date').val();
            var final = $('#final_date').val();
            if (initial != '' && final != '') {
                window.location.href = "{{ url('/') }}/admin/reports/ingresos-gastos/" + initial + "/" + final;
            }
        }
    </script>
@stop
