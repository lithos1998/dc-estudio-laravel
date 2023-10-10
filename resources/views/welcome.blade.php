@extends('layouts.app') {{-- bring home.blade.app from layouts --}}

@section('content')
    <div id="home-image" class="img-home">
        <span class="eslogan">¡Haciendo lo que se debe hacer!</span>
    </div>

    @include('components.we-are')

    @include('components.administracion')

    @include('components.suppliers')
    
    @include('components.form')

@endsection




