<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, minimum-scale-1.0, user-scalable=no">
    <meta name="author" content="Carlos Riveros">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="{{ asset('chosen/chosen.css') }}" rel="stylesheet">
    <link rel="icon" href="/assets/img/icono.ico">
    <script src="https://kit.fontawesome.com/aa47ff6f99.js" crossorigin="anonymous"></script>
    
    <title>Panel de control</title>
</head>
<body>

    @include('components.nav_panel')
    
    <section class="main">
        @yield('content')
    </section>


     {{-- <!-- jquery -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script> --}}
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/dfa42ae890.js" crossorigin="anonymous"></script>
    <script src="{{ asset('chosen/chosen.jquery.js') }}"></script>
    <script src="/js/script.js"></script>
</body>