@extends('adminlte::page')

@section('title', 'Edit Llave')

@section('content_header')
    <h1>Editar Llave</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <form action="/llaves/{{$llave->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container mt-3">
                        <label class="label form-label">Llave</label>
                    </div>

                    <div class="container">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg></span>
                            <input class="form-control rounded-right" type="text" name='descripcion_llave' required value="{{$llave->descripcion}}">
                        </div>
                    </div>

                    <div class="container">
                        <a href="/llaves"  class="btn btn-danger  mt-2 mr-2">
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary  mt-2">
                            editar
                        </button>
                    </div>
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
