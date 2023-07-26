<nav>
    <img class="decoration" src="assets/img/decoracion2.png" alt="" srcset="">
    <div>
        <div class="logo-institution">
            <div class="contact-nav">
                
                @if (Route::current()->getName() == 'principal')
                    <a id="contact-link" href="#contact-home" class="nav-link">Contacto</a>
                    <a id="us-link" href="#us" class="nav-link">Quienes somos</a>
                @else
                    <a id="home-link" href="/" class="">Home</a>
                @endif
                
            </div>   
            <img class="logo-buildings" src="assets/img/logo.png" alt="">      
            <p>DC | ESTUDIO COCIANCIH</p>      
        </div> 

        <div class="nav-bar">
            <div class="nav-buttons">
                @include('components.links')
            </div>

            <div class="nav-buttons-mobile">
                <a href="" id="mobile-menu"><i class="fa fa-bars mobile-icon" aria-hidden="true"></i></a>                
            </div>
        </div>

        <div class="mobile-menu-nav">
            @include('components.links')
        </div>
    </div>
</nav>