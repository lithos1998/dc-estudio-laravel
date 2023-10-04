@extends('layouts.app')

@php
    $services = [];

    $services = [
        "Limpieza para servicios Airbnb" => "airbnb",
        "Limpieza integral para consorcios" => "building",
        "Domicilios particulares" => "house",
        "Empresas y comercios" => "shop"
    ];
@endphp


@section('content')
    <div class="new-airs-page">
        <div class="newairs-data">
            <img class="newairs-logo" src="assets/img/newairs/newairs.png">

            <div class="we-are container">
                <p><span>New Airs</span> es una división de <span>DC. Estudio Cociancih</span>. Empresa dedicada exclusivamente a las necesidades de mantenimiento y aseo de carácter general, ya sea, empresas, consorcios, comercios y domicilios particulares. Todo lo que abarcaria una asistencia de primera instancia destacando nuestro servicio en higiene y atención al cliente en la colaboración entrenada de nuestro personal.</p>
                <p>Para mas info visita la pagina oficial de <span><a href="https://newairs.ar//index.php">New Airs</a></span></p>
            </div>
        </div>

        <div class="newairs-services">
            <h2>Nuestros servicios</h2>

            <div class="services">                
                @foreach ($services as $title => $class )                   
                    <div>
                        <x-icon :icon="$class"/>
                        <h3>{{ $title }}</h3>
                    </div>                
                @endforeach
            </div>
        </div>
    </div>
@endsection