<div class="administracion" id="administracion">
    <h1>Administracion de consorcios</h1>
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
        <div class="clients-logos">
            @foreach ( Data::$clients_logo as $image)
                <img src="/assets/images/clients/{{ $image }}.png">
            @endforeach
        </div>

        <h2>Nuestros consorcistas</h2>
        <div class="clients">
            @foreach ( Data::$clients as $addres)
                <div class="client">
                    <i class="fa-solid fa-building"></i>
                    <h3>{{ $addres }}</h3>
                </div>
            @endforeach
        </div>

        <h2>Nuevas incorporaciones</h2>

        <div class="buildings">

            @include("components.buildings")

        </div>
    </div>
</div>