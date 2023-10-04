@php
    $buildings = [];

    $buildings = [
        [
            "Voir", "Amenabar" , "2913", "Belgrano"
        ],
        [
            "Rivadavia", "Rivadavia" , "6120", "Caballito"
        ],
        [
            "Park cid", "Antezana" , "570", "Caballito"
        ]
    ];
@endphp

{{-- 

    ecuador 560 
    
    jose maria moreno 186

--}}


@foreach ($buildings as $data)

    <div class="building">
        <img class="admin-images" src="assets/img/buildings/{{ $data[1] }}.png">

        <div>
            <h2>{{ $data[0] }}</h2>
            <h3>{{ $data[1] }} <span>{{ $data[2] }}</span></h3>
            <h4>{{ $data[3] }}</h4>
        </div>
    </div>
    
@endforeach