@extends('adminlte::page')

@section('title', 'Update ')

@section('content_header')
    <h1>Update</h1>
@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
