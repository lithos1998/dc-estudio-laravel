@extends('layouts.app')


@section('content')
    {{-- <div class="slide"></div> --}}

    @include('components.services')
    
    @include('components.about-us')

    @include('components.form')

@endsection