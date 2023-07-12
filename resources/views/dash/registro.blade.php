@extends('adminlte::page')

@section('title', 'Registro')

@section('content_header')
    <h1>Registro</h1>
@stop

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12 p-3 rounded-sm border">
            <a href="registros/create" class="btn btn-primary mb-3" >
                Nuevo registro
            </a>

            <table id="table_create_registro" class="table table-striped table-hover rounded border ">
                <thead>
                    <th class="text-center">Llave</th>
                    <th class="text-center">Ambiente</th>
                    <th class="text-center">Encargado</th>
                    <th class="text-center">Prestatario</th>
                    <th class="text-center">Hora y Fecha del prestamo</th>
                    <th class="text-center">Hora y Fecha de devolucion</th>
                </thead>
                <tbody>


                    <tr>
                        <td class="text-center">

                        </td>
                        <td class="text-center">

                        </td>
                        <td class="text-center">

                        </td>
                        <td class="text-center">

                        </td>
                        <td class="text-center">

                        </td>
                        <td class="text-center">

                        </td>
                    </tr>

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
            $('#table_create_registro').DataTable({
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
