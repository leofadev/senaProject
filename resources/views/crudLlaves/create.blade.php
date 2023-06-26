@extends('adminlte::page')

@section('title', 'Create ')

@section('content_header')
    <h1>Crear Nueva Llave</h1>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <form action="/llaves" method="POST">
                        @csrf
                        <div class="container">
                            <label class="label form-label">Ambiente</label>
                        </div>

                        <div class="container">
                            <select name="id_ambiente" class="form-select form-select-sm">
                            @foreach($ambientes as $ambient)
                                <option>
                                    {{$ambient}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="container mt-3">
                            <label class="label form-label">Llave</label>
                        </div>


                        <div class="container">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Llave</span>
                                <input class="form-control rounded-right" type="text" name='descripcion_llave' required>
                            </div>
                        </div>

                        <div class="container">
                            <a href="/llaves"  class="btn btn-danger  mt-2 mr-2">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary  mt-2">
                                Crear
                            </button>
                        </div>
                    </form>
                </div>
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
    <script>
        console.log('Hi!');
    </script>
@stop
