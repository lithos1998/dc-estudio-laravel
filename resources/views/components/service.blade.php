@foreach ($services as $service )
    <div class="service">           
        <a class="icon-div">
            <i class="{{ $service['icon'] }}"></i>
        </a>
        <h3>{{ $service['name'] }}</h3>
    </div>
@endforeach