<div class="administracion" id="administracion">
    {{-- <h1>Administracion de consorcios</h1> --}}

    <div class="our-clients">
        <p class="page-title">Nuevas incorporaciones</p>
        <div class="buildings">
            @include("components.buildings")
        </div>

        <p class="page-title">Nuestros consorcistas</p>
        <div class="clients">
            @foreach ( Data::$clients as $addres)
                <div class="client">
                    <img src="/assets/images/logo.png" width="120">
                    <h3>{{ $addres }}</h3>
                </div>
            @endforeach
        </div>

        <p class="page-title">Nuestros clientes</p>
        <div class="clients-logos">
            @foreach ( Data::$clients_logo as $image)
                <img src="/assets/images/clients/{{ $image }}.png">
            @endforeach
        </div>
    </div>
</div>