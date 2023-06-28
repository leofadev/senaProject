@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <form action="/estados" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="container">
                                <div class="container">
                                    <label class="label form-label">Llave</label>
                                </div>
                                <div class="input-group">
                                    <select name="id_llave" class="form-select form-select-sm">
                                        @foreach($llaves as $llave)
                                            <option value="{{$llave}}">
                                                {{$llave}}
                                            </option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="container">
                                <div class="container">
                                    <label class="label form-label">Ambiente</label>
                                </div>
                                <div class="input-group">
                                    <select name="id_ambiente" class="form-select form-select-sm">
                                        @foreach($ambientes as $ambiente)
                                            <option value="{{$ambiente}}">
                                                {{$ambiente}}
                                            </option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="container">
                                <div class="container">
                                    <label class="label form-label">Encargado</label>
                                </div>
                                <div class="input-group">
                                    <input class="input rounded" type="text" name='encargado' required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="container">
                                <div class="container">
                                    <label class="label form-label">Prestatario</label>
                                </div>
                                <div class="input-group">
                                    <input class="input rounded" type="text" name='prestatario' required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="container">
                                <div class="container">
                                    <label class="label form-label">Estado</label>
                                </div>
                                <div class="input-group">
                                    <input class="input rounded" type="text" name='estado' required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <a href="/estados"  class="btn btn-danger  mt-2 mr-2">
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
