@extends('layouts.app')


@section('content')
    <div class="administracion">
        <div class="admin-presentation">
            <div class="logo-dc-admin">

                @include("components.logo")

            </div>

            <div class="admin-presentation-data">
                <p>Con más de 10 años de trayectoria, nosotros proponemos a nuestros clientes una forma diferente de gestión, donde el objetivo principal es el cuidado del patrimonio de los proyectos y desafíos que llevamos adelante. Con una atención permanente y personalizada velando por la conservación y cuidado del buen funcionamiento de los servicios que brindamos, para su conford y tranquilidad.</p>
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