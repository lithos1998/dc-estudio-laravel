@php
    $buildings = [];

    $buildings = [
        [
            "Voir", "Amenabar" , "2913", "Belgrano", "2023"
        ],
        [
            "Rivadavia", "Rivadavia" , "6120", "Caballito", "2023"
        ],
        [
            "Park cid", "Antezana" , "570", "Caballito", "2023"
        ]
    ];
@endphp

{{-- 

    ecuador 560 
    
    jose maria moreno 186

--}}


@foreach ($buildings as $data)

    <div class="building">
        <div class="building-img" >
            <div class="ribbon-wrapper">
                <div class="ribbon">{{ $data[4] }}</div>
            </div>
            
            <img class="admin-images" src="assets/images/buildings/{{ $data[1] }}.png">
        </div>

        <div>
            <h2>{{ $data[0] }}</h2>
            <h3>{{ $data[1] }} <span>{{ $data[2] }}</span></h3>
            <h4>{{ $data[3] }}</h4>
        </div>
    </div>
    
@endforeach