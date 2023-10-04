@php
    $links = [
        "Adm. de consorcio" => "administracion",
        "Consultaria contable" => "contable",
        "Contratista" => "contratista",
        "Certificaciones" => "certificaciones",
        "New airs" => "newairs"
    ];
@endphp

@foreach ($links as $key => $value )
    <a href="/{{ $value }}" class="nav-buttons-main">{{ $key }}</a>
@endforeach