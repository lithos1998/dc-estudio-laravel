@extends('layouts.app') {{-- bring home.blade.app from layouts --}}

@section('content')
    <div id="home-image" class="img-home">
        <span class="eslogan">¡Haciendo lo que se debe hacer!</span>
    </div>

    

    <div id="us" class="we-are container">
        <h1>Quienes somos</h1>

        <p><span class="title-span">DC. Estudio Cociancih</span> es un estudio integrador, exclusivo para grandes empresas, pymes y sociedades unipersonales con un compendium de servicios especializado para consorcios. </p>

        <p>Con más de 10 años de trayectoria, nosotros proponemos a nuestros clientes una forma diferente de gestión, donde el objetivo principal es el cuidado del patrimonio de los proyectos y desafíos que llevamos adelante. Con una atención permanente y personalizada velando por la conservación y cuidado del buen funcionamiento de los servicios que brindamos, para su conford y tranquilidad.</p>
    </div>

    @include('components.form')

    @include('components.consorcio')

    <div class="administracion" id="administracion">
        <h1>Administracion de consorcio</h1>
        <div class="admin-presentation">
            <div class="logo-dc-admin">

                @include("components.logo")

            </div>

            <div class="admin-presentation-data">
                <p>Con más de 10 años de trayectoria, nosotros proponemos a nuestros clientes una forma diferente de gestión y coordinación de áreas y servicios compartidos, donde el objetivo principal es el cuidado del patrimonio de los proyectos, el mantenimiento óptimo de espacios comunes, como ascensores y jardines, así como una gestión financiera adecuada. Con una atención permanente y personalizada velando por la conservación y cuidado del buen funcionamiento de los servicios que brindamos, para su conford y tranquilidad. Esto es esencial para garantizar la convivencia armoniosa, resolver conflictos y promover la transparencia y la comunicación efectiva entre los propietarios.</p>
            </div>
        </div>

        <div class="our-clients">
            <h2>Nuestros clientes</h2>

            <div class="buildings">

                @include("components.buildings")

            </div>
        </div>
    </div>
@endsection




