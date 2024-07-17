<div class="administracion container" id="administracion">

    <div class="our-clients">
        <h2 class="admin-title">Administracion de consorcios</h2>

        <p class="page-title">Nuevas incorporaciones</p>
        <div class="buildings">
            @include("components.buildings")
        </div>

        <p class="page-title">Nuestros consorcistas</p>
        <div class="clients">
            @foreach ( Data::$clients as $addres)
                <div class="client">
                    <img alt="Logo" src="/assets/images/logo.webp">
                    <h3>{{ $addres }}</h3>
                </div>
            @endforeach
        </div>

        <p class="page-title">Nuestros clientes</p>
        <div class="clients-logos">
            @foreach ( Data::$clients_logo as $image)
                <img src="/assets/images/clients/{{ $image }}.webp" alt="Logo de {{ $image }}">
            @endforeach
        </div>
    </div>
</div>