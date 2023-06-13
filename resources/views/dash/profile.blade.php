@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-section-border />
                @endif



                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-section-border />
                @endif

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

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
