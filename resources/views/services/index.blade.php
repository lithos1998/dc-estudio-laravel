@extends('layouts.app')

@section('content')
    <div class="index-services">
       <div class="services">
            <h2>Servicios</h2>

            <x-services_data :services="$services"/>
        </div>
    </div>
@endsection