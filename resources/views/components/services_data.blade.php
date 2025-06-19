<div class="data">
    @foreach ($services as $service )                      
        <div class="service">           
            <img src="/assets/img/services/{{ $service['image'] }}.webp" alt="{{ $service['image'] }}">
            
            <div>
                <h3>{{ $service['name'] }}</h3>
                <p>{{ $service['description'] }}.</p>
                <a href="/contacto?tramite={{ $service['name'] }}">Mas info -></a>
            </div>
        </div>
    @endforeach
</div>