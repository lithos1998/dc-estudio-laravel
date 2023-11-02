@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="certificaciones-logos">
            <img src="/assets/images//suppliers/dovalle.png">
            <i class="fa-solid fa-xmark"></i>
            <img src="/assets/images/logo.png">
        </div>

        <div class="certificaciones-presentacion">
            <p>En <span>DC|Estudio Cociancih</span> Trabajamos en conjunto con <span>Estudio Dovalle</span> que se distingue por su compromiso con la innovación y la excelencia. Ademas cuenta con profesionales altamente calificados que que ayudan a nuestros clientes a materializar sus sueños y proyectos.</p>
            <p>Contamos con todo tipo de certificaciones y planos para ayudarte con tu negocio, administracion y/o inmobiliaria</p>
        </div>

        <div class="dovalle-services">
            @php
                $json = file_get_contents("https://estudiodovalle.com/get-services");
                $services = json_decode($json, true);        
            @endphp

            @foreach ($services['data'] as $key => $service)
                <div class="dovalle-service">
                    <i class="{{ $service['icon'] }}"></i>
                    <p>{{ $service['name'] }}</p>
                </div>
            @endforeach
        </div>

        @include('components.go-contact')

    </div>

    
@endsection