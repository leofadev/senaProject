@extends('adminlte::page')

@section('title', 'Change Password')

@section('content_header')
    <h1>Change Password</h1>
@stop

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>

                        <x-section-border />
                    @endif

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
