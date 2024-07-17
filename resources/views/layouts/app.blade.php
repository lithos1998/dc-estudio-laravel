<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="assets/images/logo.webp" >

        <title>DC Estudio</title>
    </head>
    <body>
        <div class="go-up" id="goUp">
            <i class="fa-solid fa-arrow-up"></i>
        </div>

        <div class="wpp-me" id="wppMe">
            <a target="_blank" aria-label="Ir a whatsapp" href="https://api.whatsapp.com/send?phone=+5491127871148&text=Hola%20vengo%20de%20estudio%20cociancih%20y%20deseo%20informacion">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>


        @include('components.nav')            
        
         
        @yield('content')


        @include('components.footer')        
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="js/jquery-3.7.0.js"></script> --}}
    <script src="js/form-validation.js" defer></script>
    <script src="js/dcScript.js" defer></script>
    <script src="https://kit.fontawesome.com/dfa42ae890.js" crossorigin="anonymous"></script>
</html>
