@extends('layouts.app') {{-- bring home.blade.app from layouts --}}

@section('content')
    <div id="home-image" class="img-home">
        <span class="eslogan">¡Haciendo lo que se debe hacer!</span>
    </div>

    <div id="us" class="we-are container">
        <h1>Quienes somos</h1>

        <div class="logo-dc-admin">
            <img class="logo-buildings" src="assets/images/logo.png" alt="">      
            <h1>DC | ESTUDIO COCIANCIH</h1>
        </div>

        <div class="check-group">
            <div class="check">
                <i class="fa-regular fa-circle-check"></i>
                <h2>Comunicacion</h2>
            </div>
            <div class="check">
                <i class="fa-regular fa-circle-check"></i>
                <h2>Transparencia</h2>
            </div>
            <div class="check">
                <i class="fa-regular fa-circle-check"></i>
                <h2>Voluntad</h2>
            </div>
        </div>

        <div class="admin-presentation-data">
            <p>Con más de 10 años de trayectoria, nosotros proponemos a nuestros clientes una forma diferente de gestión y coordinación de áreas y servicios compartidos, donde el objetivo principal es el cuidado del patrimonio de los proyectos, el mantenimiento óptimo de espacios comunes, como ascensores y jardines, así como una gestión financiera adecuada. Con una atención permanente y personalizada velando por la conservación y cuidado del buen funcionamiento de los servicios que brindamos, para su conford y tranquilidad. Esto es esencial para garantizar la convivencia armoniosa, resolver conflictos y promover la transparencia y la comunicación efectiva entre los propietarios.</p>
        </div>

    </div>

    @include('components.administracion')

    @include('components.suppliers')
    
    @include('components.form')

@endsection




