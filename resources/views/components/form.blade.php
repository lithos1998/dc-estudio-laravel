<div id="contact-home" class="contact">
        <h2>Contacto</h2>
        <p class="contact-text">Creemos que la comunicación es una herramienta fundamental para lograr las metas propuestas y satisfacer las demandas de nuestros clientes, no dudes en contactarnos.</p>
        <div class="w-100 contact-div">
            <div class="contact-us d-column container">
                <div class="contact-data d-column">
                    <p>Tel.: (+54) 9 11 2787-1148</p>
                    <p>Email: administracion@dc.ar </p>   
                </div>

                @include('components.social-media')
            </div>
            
            <div class="contact-us-form d-column container">            
                <form action="sentMail.php" name="form-contact" method="post" class="w-100" id="contact-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @include('components.inputs')
                    
                    <input type="submit" value="Enviar" class="w-100 sent-form">                                   
                </form>                                   
            </div>  
        </div>
    </div>