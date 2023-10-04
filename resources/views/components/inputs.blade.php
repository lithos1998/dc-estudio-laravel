@php
    $inputs = [
        [
            "type" => "text",
            "name_id" => "name",
            "class" => "name",
            "pattern" => "",
            "placeholder" => "Nombre y apellido"
        ],
        [
            "type" => "email",
            "name_id" => "email",
            "class" => "email",
            "pattern" => "[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}",
            "placeholder" => "Razon por la que se comunica"
        ],
        [
            "type" => "reason",
            "name_id" => "reason",
            "class" => "reason",
            "pattern" => "",
            "placeholder" => "Email: Ejemplo@mail.com"
        ],
        [
            "type" => "text",
            "name_id" => "address",
            "class" => "address d-none",
            "pattern" => "",
            "placeholder" => "Domicilio"
        ],
    ];

    $options = [
        "razon" => "Motivo por la cual se contacta",
        "consorcio" => "Administracion de consorcio",
        "contable" => "Consultaria contable",
        "contratista" => "Contratista",
        "newairs" => "New airs",
        "certificaciones" => "Certificaciones",
        "otros" => "Otros",
    ];
@endphp


@foreach ($inputs as $data )
    @if ($data["type"] != "reason")                            
        <input type="{{ $data["type"] }}" name="{{ $data["name_id"] }}" id="{{ $data["name_id"] }}" class="{{ $data["class"] }}" placeholder="{{ $data["placeholder"] }}"  pattern="{{ $data["pattern"] }}">
    @else
        <select name="{{ $data["type"] }}" id="{{ $data["name_id"] }}" class="{{ $data["name_id"] }}" placeholder="{{ $data["placeholder"] }}">
            @foreach ($options as $key => $option)
                <option value="{{ $key }}">{{ $option }}</option>
            @endforeach
        </select>
    @endif
@endforeach