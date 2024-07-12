@extends('layouts.app')


@section('content')
    <div class="container">             
        <div class="certificaciones-presentacion">
            <p>En <span>DC|Estudio Cociancih</span> nos distinguimos por nuestro compromiso con la innovación y la excelencia. Ademas contamos con profesionales altamente calificados que ayudan a nuestros clientes a materializar sus sueños y proyectos.</p>
            <p>Contamos con todo tipo de certificaciones y planos para ayudarte con tu negocio, administracion y/o inmobiliaria</p>
        </div>

        <div class="dovalle-services">
            @php
                // dovalle API 
                $json = file_get_contents("https://www.estudiodovalle.com/api/sharedservices");
                $services = json_decode($json, true);   
            @endphp

            @foreach ($services as $key => $service)
                <div class="dovalle-service">
                    <i class="{{ $service['icon'] }}"></i>
                    <p>{{ $service['name'] }}</p>
                </div>
            @endforeach
        </div>

        @include('components.go-contact')

    </div>

    
@endsection