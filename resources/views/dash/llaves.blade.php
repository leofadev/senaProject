@extends('adminlte::page')

@section('title', 'Llaves')

@section('content_header')
    <h1>Llaves de los Ambienetes</h1>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 p-3 rounded-sm border">
                <a href="llaves/create" class="btn btn-primary mb-3">
                    Nueva Llave
                </a>

                <table id="table_create_llaves" class="table table-striped table-hover rounded border ">
                    <thead>
                        <th class="text-center">Llaves</th>
                        <th class="text-center">Ambientes</th>
                        <th class="text-center">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($llaves as $llave)
                            <tr>
                                <td class="text-center">
                                    {{ $llave->descripcion }}
                                </td>
                                <td class="text-center">
                                    {{ $llave->ambientes->descripcion ?? '' }}
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('llaves.destroy', $llave->id) }}" method="POST">
                                        <a href="/llaves/{{ $llave->id }}/edit" class="btn btn-warning">
                                            Editar
                                        </a>
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
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        console.log('Hi!');

        $(document).ready(function() {
            $('#table_create_llaves').DataTable({
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
    </script>
@stop
