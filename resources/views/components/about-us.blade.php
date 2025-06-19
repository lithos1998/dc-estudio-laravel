<div class="about-us container" id="about-us" >
    <div class="about-us-content">
        <h2 class="text-center">Valores</h2>
        <p class="container text-center text-nosotros">En <span>Estudio Dovalle</span> nos destacamos por nuestra atención personalizada y excelente servicio. Priorizamos la comunicacion y la colaboracion estrecha con todos nuestros clientes, con un equipo de profesionales altamente calificados para ir atendiendo y resolviendo de manera personal los diferentes problemas planteados. <br>Nuestra dedicación a la calidad, la creatividad y la satisfacción del cliente nos convierte en la elección ideal para resolver los diferentes problemas.</p>
        
        <h2 class="text-center">¿Por que elegirnos?</h2>
        <p class="container text-center text-nosotros">Nos especializamos en brindar soluciones rápidas y efectivas, anticipándonos a posibles obstáculos y ofreciendo alternativas viables. La gestión de obras es una de nuestras fortalezas, donde cada paso es cuidadosamente supervisado para asegurar la calidad y el cumplimiento de los plazos establecidos.</p>
        <div class="skills">
            @foreach (Data::$skills as $skill)
                <div class="skill">
                    <i class="{{ $skill['icon'] }}"></i>
                    <p> {{ $skill['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="references container" id="references" >
    <div id="our-references">
        <h2>Referencias comerciales</h2>

        {{-- carousel script --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carouselInner = document.querySelector('.carousel-inner');
                const slides = document.querySelectorAll('.carousel-item');
                const totalSlides = slides.length;
                const slideWidth = slides[0].offsetWidth;
                let currentPosition = 0;

                // Copiamos los slides iniciales para colocarlos al final y crear el efecto de bucle
                for (let i = 0; i < totalSlides; i++) {
                    const cloneSlide = slides[i].cloneNode(true);
                    carouselInner.appendChild(cloneSlide);
                }

                setInterval(function() {
                    currentPosition++;
                    carouselInner.style.transition = 'transform 0.5s ease-in-out';
                    carouselInner.style.transform = `translateX(-${currentPosition * slideWidth}px)`;

                    // Cuando llegamos al final, regresamos al primer slide sin transición
                    if (currentPosition === totalSlides) {
                        setTimeout(function() {
                            carouselInner.style.transition = 'none';
                            carouselInner.style.transform = 'translateX(0)';
                            currentPosition = 0;
                        }, 500);
                    }
                    
                }, 1000); 
            });
            
        </script>

        <div class="carousel">
            <div class="carousel-inner">         
                    @php
                        $clients = ['df', 'come', 'tizado', 'gomez', 'ambrosini', 'berardi', 'bv', 'centro_ojos', 'cipa', 'dario', 'gestionexpress', 'grido', 'huxley', 'podio', 'oduch', 'of', 'portela', 'remax', 'soldati', 'tenis', 'tp', 'woden', 'df', 'come', 'tizado', 'gomez', 'ambrosini', 'berardi', 'bv', 'centro_ojos', 'cipa', 'dario', 'gestionexpress', 'grido', 'huxley', 'podio', 'oduch', 'of', 'portela', 'remax', 'soldati', 'tenis', 'tp', 'woden','df', 'come', 'tizado', 'gomez', 'ambrosini', 'berardi', 'bv', 'centro_ojos', 'cipa', 'dario', 'gestionexpress', 'grido', 'huxley', 'podio', 'oduch', 'of', 'portela', 'remax', 'soldati', 'tenis', 'tp', 'woden','df', 'come', 'tizado', 'gomez', 'ambrosini', 'berardi', 'bv', 'centro_ojos', 'cipa', 'dario', 'gestionexpress', 'grido', 'huxley', 'podio', 'oduch', 'of', 'portela', 'remax', 'soldati', 'tenis', 'tp', 'woden','df', 'come', 'tizado', 'gomez', 'ambrosini', 'berardi', 'bv', 'centro_ojos', 'cipa', 'dario', 'gestionexpress', 'grido', 'huxley', 'podio', 'oduch', 'of', 'portela', 'remax', 'soldati', 'tenis', 'tp', 'woden'];
                    @endphp

                    @foreach ( $clients as $client )
                        <div class="carousel-item">
                            <img src="/assets/img/clients/{{ $client }}.webp" alt="{{ $client }}_logo">                                  
                        </div>
                    @endforeach              
            </div>
        </div>

        <script>
            animation = false;
            // animate increase counters
            function animateCounter(id, finalValue){
                let element = document.getElementById(id);
                let currentValue = parseInt(element.innerText);

                // increase the value
                let interval = setInterval(function() {
                    currentValue++;
                    element.innerText = currentValue;

                    // stop the animation
                    if (currentValue >= finalValue) {
                        clearInterval(interval);
                    }
                }, 0.5);
            }

            // increase counters
            window.addEventListener('scroll', function() {
                let sectionOffset = document.getElementById('references').offsetTop;
                let scrollPosition = window.pageYOffset + window.innerHeight;

                // user scroll till the section
                if (scrollPosition > sectionOffset && animation == false) {
                    animation = true;
                    animateCounter('habilitaciones', 373);
                    animateCounter('informes', 1893);
                    animateCounter('gestiones', 582);
                    animateCounter('trabajos', 53);
                }
            });
        </script>

        <h2>Trabajos realizados</h2>
        <div class="our-references" id="references" >
            @foreach (Data::$references as $reference)
                <div class="reference">
                    <div>
                        <i class="{{ $reference['icon'] }}"></i>
                        <span id="{{ $reference['id'] }}">0</span>
                    </div>
                    <p>{{ $reference['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>