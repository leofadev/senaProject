@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')



@stop

@section('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
@stop

@section('js')
    <script>console.log('Hi!');</script>
@stop
