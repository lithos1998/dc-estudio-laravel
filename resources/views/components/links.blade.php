@php
    $links = [
        "Adm. de consorcio" => "#administracion",
        "Consultaria contable" => "contable",
        "Certificaciones" => "certificaciones",
        "New airs" => "newairs",
        "Blogs" => "blogs"
    ];
@endphp

@foreach ($links as $key => $value )
    <a href="/{{ $value }}" class="nav-buttons-main">{{ $key }}</a>
@endforeach