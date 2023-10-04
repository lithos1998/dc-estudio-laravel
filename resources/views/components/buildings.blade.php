@php
    $buildings = [];

    $buildings = [
        [
            "Amenabar" , "2913", "Belgrano"
        ],
        [
            "Rivadavia" , "6120", "Cabalito"
        ],
        [
            "Antezana" , "570", "Cabalito"
        ]
    ];
@endphp

{{-- 

    ecuador 560 
    
    jose maria moreno 186

--}}


@foreach ($buildings as $data)

    <div class="building">
        <img class="admin-images" src="assets/img/buildings/{{ $data[0] }}.png">

        <div>
            <h2>{{ $data[0] }} <span>{{ $data[1] }}</span></h2>
            <h3>{{ $data[2] }}</h3>
        </div>
    </div>
    
@endforeach