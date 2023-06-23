@extends('adminlte::page')

@section('title', 'Update ')

@section('content_header')
    <h1>Update</h1>
@stop

@section('content')

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <form action="/ambientes/{{$ambiente->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <label class="label form-label">Ambiente</label>
                        </div>
                        <div class="input-group">
                            <input class="input rounded" type="text" name='descripcion' required value="{{$ambiente->descripcion}}">
                        </div>
                        <div class="container">
                            <a href="/ambientes"  class="btn btn-danger  mt-2 mr-2">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary  mt-2">
                                editar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
