<div class="administracion" id="administracion">
    {{-- <h1>Administracion de consorcios</h1> --}}

    <div class="our-clients">
        <h2>Nuevas incorporaciones</h2>
        <div class="buildings">
            @include("components.buildings")
        </div>

        <h2>Nuestros consorcistas</h2>
        <div class="clients">
            @foreach ( Data::$clients as $addres)
                <div class="client">
                    <img src="/assets/images/logo.png" width="120">
                    <h3>{{ $addres }}</h3>
                </div>
            @endforeach
        </div>

        <h2>Nuestros clientes</h2>
        <div class="clients-logos">
            @foreach ( Data::$clients_logo as $image)
                <img src="/assets/images/clients/{{ $image }}.png">
            @endforeach
        </div>
    </div>
</div>