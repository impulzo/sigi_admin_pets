@extends('voyager::master')

@section('page_title', 'Historial Médico')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-book"></i>
        Historial Médico
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
                                        <th>Mascota</th>
                                        <th>Motivo</th>
                                        <th>Desde cuando</th>
                                        <th>Sìntomas</th>
										<th>Tratamiento</th>
										<th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
										    <td>{{ $item->pet ? $item->pet->name : '' }}</td>
											<td>{{ $item->reason }}</td>
                                            <td>{{ $item->since_when }}</td>
                                            <td>{{ $item->symptoms }}</td>
											<td>{{ $item->treatment }}</td>
											<td>
												 <form action="{{ route('voyager.medical-histories.destroy', $item->id) }}" method="POST" class="delete-form" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger pull-right delete" style="margin-right: 5px">
                                                        <i class="voyager-trash"></i> Borrar
                                                    </button>
                                                </form>

												<a href="{{ url('/admin/medical-histories/'.$item->id .'/edit/') }}" class="btn btn-sm btn-primary pull-right edit">
												<i class="voyager-edit"></i>Editar</a>

												<a href="{{ url('/admin/medical-histories/'.$item->id) }}" class="btn btn-sm btn-warning pull-right view">
												<i class="voyager-eye"></i>Ver</a>

												<a href="{{ url('/admin/medicalhistory/'.$item->pet_id) .'/vaccine/'}}" class="btn btn-sm btn-primary pull-right" style="margin-right: 5px">
												<i class="voyager-file-text"></i>Vacunas</a>

											</td>
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
    <script>
        $('#dataTable').DataTable({
            destroy: false,
            pageLength: 10,
            order: [
                [1, 'desc']
            ],
            language: {
                sProcessing: "Procesando...",
                sLengthMenu: "Mostrar _MENU_ registros",
                sZeroRecords: "No se encontraron resultados",
                sEmptyTable: "Ningún dato disponible en esta tabla",
                sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                sSearch: "Buscar:",
                sLoadingRecords: "Cargando...",
                oPaginate: {
                    sFirst: "Primero",
                    sLast: "Último",
                    sNext: "Siguiente",
                    sPrevious: "Anterior"
                },
            },
            lengthMenu: [
                [5, 10, 15],
                [5, 10, 15],
            ],
        });

        // Confirmación antes de borrar
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!confirm('¿Estás seguro de que deseas eliminar este historial médico?')) {
                    event.preventDefault();
                }
            });
        });
    </script>
@stop
