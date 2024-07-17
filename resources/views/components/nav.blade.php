<nav id="navbar" class="">
    <img class="decoration" src="assets/images/decoracion2.webp" alt="decoracion" srcset="">
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

            @include("components.logo")
            
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
            @if (Route::current()->getName() == 'principal')
                <a  href="#contact-home" class="nav-buttons-main">Contacto</a>
            @endif
        </div>
    </div>
</nav>

<nav id="fixed-navbar" class="">
    <div class="fixed-nav-bar">
        <div class="nav-buttons" id="fixed-bar">
            @include('components.links')
        </div>
    </div>
</nav>