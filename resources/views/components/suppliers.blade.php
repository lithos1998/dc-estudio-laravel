
<div class="our-suppliers">
    <p class="page-title">Nuestros proveedores</p>

    <div class="our-suppliers-data">    
        <div class="consorcio-libre">
            <img class="logo-consorcio" src="assets/images/suppliers/consorcioabierto.png" alt="">
            <p class="d-none">Trabajamos en conjunto con consorcio abierto una plataforma diseñada específicamente para administraciones de edificios, con el objetivo de centralizar toda la información y asi estar conectados constantemente para encontrar las respuestas al instante</p>

            <div class="consorcio-data">
                <div class="div-video-qr">
                    <div class="info-consorcio">                
                        <div class="video-consorcio">
                            <iframe id="video-yt" src="https://www.youtube.com/embed/FanVUMp9H90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div> 
                        
                        <div class="div-qr">
                            <img src="assets/images/consorcio_abierto/qr.jpg" alt="">
                        </div>
                    </div>
                </div> 

                <div class="div-qr-data container">
                    <p class="registrate-consorcio">Para registrate, escanea o clickea el codigo qr y descarga la app.</p>

                    <p class="store-consorcio">Disponible en <span> Google Play </span> y <span> App Store. </span></p>
                </div>
                
                <a href="https://app.consorcioabierto.com" target="_blank" id="consorcio-abierto-btn" class="consorcio-button">Ir a mi consorcio abierto</a>
            </div>
        </div> 

        <div class="suppliers">
            @foreach (Data::$suppliers as $logo)
                <img src="assets/images/suppliers/{{ $logo }}.png">
            @endforeach
        </div>                 
    </div>
</div>