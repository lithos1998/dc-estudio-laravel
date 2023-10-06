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

    @include('components.suppliers')

    @include('components.administracion')

@endsection




