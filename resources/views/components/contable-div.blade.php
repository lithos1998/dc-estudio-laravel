@php
    $contable_list = Data::$contable;
@endphp

@foreach ( $contable_list as $key => $value )
    @php
        $class = "";
        $display = "d-none";
        $arrow = "fa-chevron-down ";

        if (array_keys($contable_list)[0] == $key) {
            $class = "contable_radius";
            $display = "";
            $arrow = "fa-chevron-up ";
        }
    @endphp

    <div class="div-contable {{ $class }} ">
        <h3 id="{{ $value["id"] }}" class="cont-button"><i class="arrow-contable fa-solid {{ $arrow }}"></i> <i class="{{ $value["class"] }} "></i> {{ $value["title"] }}</h3> 
        <div class="{{ $value["id"] }} cont-list {{ $display }}">';
            @foreach ( $value["data"] as $data )
                <p>- {{ $data }}.</p>
            @endforeach
        </div>
    </div>
@endforeach