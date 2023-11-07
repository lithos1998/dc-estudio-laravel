@extends('layouts.app')


@section('content')
    <div class="new-airs-page">
        <div class="newairs-data">
            <img class="newairs-logo" src="assets/images/suppliers/newairs.png">

            <div class="we-are container">
                <p><span>New Airs</span> es una división de <span>DC. Estudio Cociancih</span>. Empresa dedicada exclusivamente a las necesidades de mantenimiento e instituciones educativas. Todo lo que abarcaria una asistencia de primera instancia destacando nuestro servicio en higiene y atención al cliente en la colaboración entrenada de nuestro personal.</p>
                
                @include('components.go-contact')

                <p>Tambien puedes visitar la pagina oficial de <span><a href="https://newairs.ar//index.php">New Airs</a></span></p>
            </div>
        </div>

        <div class="newairs-services">
            <h2>Nuestros servicios</h2>

            <div class="services">                
                @foreach (Data::$newairs_services as $title => $class )                   
                    <div>
                        {{-- <x-icon :icon="$class"/> --}}
                        <i class="{{ $class }}"></i>
                        <h3>{{ $title }}</h3>
                    </div>                
                @endforeach
            </div>
        </div>
    </div>
@endsection