@extends('voyager::master')

@section('page_title', 'Vacunas')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-book"></i>
        Vacunas
    </h1>
	<a href="{{ route('voyager.vaccines.create') }}" class="btn btn-success">
    <i class="voyager-plus"></i> Crear
	</a>
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
                                        <th>Fecha</th>
                                        <th>Detalles</th>
										<th>Foto</th>
                                        <th>Mascota</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item-date }}</td>
                                            <td>{{ $item->details }}</td>
											<td>
												@if($item->photo)
													<img src="{{ Voyager::image($item->photo) }}" style="width: 80px; height: auto; border-radius: 8px;">
												@else
													<span class="label label-default">Sin foto</span>
												@endif
											</td>

                                            <td>{{ $item->pet ? $item->pet->name : '' }}</td>
                                            <td>
                                                <form action="{{ route('voyager.vaccines.destroy', $item->id) }}" method="POST" class="delete-form" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger pull-right delete" style="margin-right: 5px">
                                                        <i class="voyager-trash"></i> Borrar
                                                    </button>
                                                </form>

                                                <a href="{{ url('/admin/vaccines/'.$item->id .'/edit/') }}" class="btn btn-sm btn-primary pull-right edit">
                                                    <i class="voyager-edit"></i> Editar
                                                </a>

                                                <a href="{{ url('/admin/vaccines/'.$item->id) }}" class="btn btn-sm btn-warning pull-right view">
                                                    <i class="voyager-eye"></i> Ver
                                                </a>
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
        document.addEventListener("DOMContentLoaded", function () {
            // Inicializar DataTable
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
        });
    </script>
@stop
