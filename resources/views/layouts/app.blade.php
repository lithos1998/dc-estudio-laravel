@php
    $construction = false;
    $color = "#fcfcfc";

    if(Route::current()->getName() == 'construccion'){
        $construction = true;
        $color = "#152b42";
    }
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/logo.png" >

        <title>DC Estudio</title>
    </head>
    <body style="background-color: {{ $color }} !important">
        <div class="go-up" id="goUp">
            <i class="fa-solid fa-arrow-up"></i>
        </div>


        @if ($construction == false)
            @include('components.nav')            
        @endif
         

        @yield('content')


        @include('components.footer')        
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/jquery-3.7.0.js"></script>
    <script src="js/form-validation.js"></script>
    <script src="js/dcScript.js"></script>
    <script src="https://kit.fontawesome.com/dfa42ae890.js" crossorigin="anonymous"></script>
    <script>                
        $(document).ready(function () {
            var img_height = $(window).height() - 160;
            $('#home-image').css("height", img_height);
        });
    </script>
</html>
