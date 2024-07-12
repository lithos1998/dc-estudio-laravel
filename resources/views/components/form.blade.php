<div id="contact-home" class="contact">
        <p class="page-title">Contacto</p>
        <p class="contact-text">Creemos que la comunicación es una herramienta fundamental para lograr las metas propuestas y satisfacer las demandas de nuestros clientes, no dudes en contactarnos.</p>
        <div class="w-100 contact-div">
            <div class="contact-us d-column container">
                <div class="contact-data d-column">
                    <div>
                        <div class="icon-container">
                            <i class="fa-solid fa-phone"></i> 
                        </div> 
                        <p>{{ Data::$phone_number}}</p>
                    </div>
                    <div>
                        <div class="icon-container">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <p>{{ Data::$email }}</p>
                    </div>   
                    <div>
                        <a href="https://www.instagram.com/estudio_cociancih_dc/" target="_blank">
                            <div class="icon-container">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <p>{{ Data::$instagram }}</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/people/Consorcio-DC-Estudio-Cociancih/61560625143190/" target="_blank">
                            <div class="icon-container">
                                <i class="fa-brands fa-facebook-f"></i> 
                            </div>
                            <p>{{ Data::$facebook }}</p>
                        </a>
                    </div>
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