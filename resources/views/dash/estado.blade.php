@extends('adminlte::page')

@section('title', 'Estado')

@section('content_header')
    <h1>Estado</h1>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 p-3 rounded-sm border">
                <a href="estados/create" class="btn btn-primary mb-3">
                    Nuevo estado
                </a>

                <table id="table_create_estado" class="table table-striped table-hover rounded border ">
                    <thead>
                        <th class="text-center">Llave</th>
                        <th class="text-center">Ambiente</th>
                        <th class="text-center">Encargado</th>
                        <th class="text-center">Prestatario</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Accion</th>
                        <th class="text-center">Opcion</th>
                    </thead>
                    <tbody>
                        @foreach ($estados as $estado_tb)
                            <tr>
                                <td class="text-center">
                                    {{ $estado_tb->estados->descripcion }}
                                </td>
                                <td class="text-center">
                                    {{ $estado_tb->ambientes->descripcion }}
                                </td>
                                <td class="text-center">
                                    {{ $estado_tb->encargado }}
                                </td>
                                <td class="text-center">
                                    {{ $estado_tb->prestatario }}
                                </td>
                                <td id="resp{{ $estado_tb->id }}" class="text-center">
                                    @if ($estado_tb->estado == 1)
                                    <button type="button" class="btn btn-sm btn-success">Habilitado</button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger">Inhabilitado</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <label class="switch form-check form-switch">
                                            <input class="mi_checkbox" data-id="{{ $estado_tb->id }}" type="checkbox"
                                            data-onStyle="success" data-offStyle="danger" data-toggle="switchbutton" checked data-size="xs"
                                            data-on="habilitado" data-off="inhabilitado"
                                            {{ $estado_tb->estado ? 'checked' : '' }}>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('estados.destroy', $estado_tb->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button Type="submit" class="btn btn-danger ml-2">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@stop

@section('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        console.log('Hi!');

        $(document).ready(function() {
            $('#table_create_estado').DataTable({
                "language": {
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Ultimo"
                    }
                }
            });
        });

        $('.mi_checkbox').change(function() {
            //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
            let estado = $(this).prop('checked') == true ? 1 : 0;
            let id = $(this).data('id');
            console.log(estado);

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('updateStatusKey') }}',
                data: {
                    'estado': estado,
                    'id': id
                },
                success: function(data) {
                    $('#resp' + id).html(data.let);
                    console.log(data.let);

                }
            });
        })
    </script>
@stop
