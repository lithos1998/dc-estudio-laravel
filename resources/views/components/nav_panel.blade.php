@php
    $nav_links = [
        'Panel' => '/', 'Presupuestos' => '/presupuestos?status=Pendiente', 'Ventas' => '/ventas', 'Clientes' => '/clientes', 'Items' => '/items' , 'Impuestos' => '/impuestos'
    ];

    if(Auth::check()){
        if(Auth::user()->privileges == 'editor'){
            $nav_links['administrador'] = '/admin';
        }

        if(Auth::user()->privileges == 'admin'){
            $nav_links['usuarios'] = '/usuarios';
        }

    }

@endphp


<div class="nav-header">
    <img src="{{ asset('assets/img/logotipo.png') }}">

    <div class="data-header">
        <h3 class="title-panel">Panel de control</h3 class="title">
    </div>
</div>

<nav class="pc-nav" id="pc-nav">
    <div class="nav-links" id="nav-pc">
        <?php
            if (Auth::check()) {
                foreach($nav_links as $link => $redirect){
        ?>
                    <a class="nav-link" id="{{ env('APP_DOMAIN_URL') }}/{{ $link }}" href="{{ $redirect }}">{{ $link }}</a>            
        <?php
                }
        ?>      
                <form action="{{ route('login.manage', Auth::user()->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <select class="options nav-link" name="options" onchange="this.form.submit()">
                        <option value="">{{ Auth::user()->user }}</option>
                        <option value="change">Cambiar contraseña</option>
                        <option value="logout">Cerrar sesion</option>
                    </select>
                </form>
        <?php
        
            }else{
        ?>
                <a class="nav-link" id="back" href="{{ env('APP_URL') }}"><i class="fa-solid fa-chevron-left"></i>Volver</a>
        <?php 
            }
        ?>
    </div>

    <div class="nav-links d-none"  id="nav-mobile">
        <a class="nav-link mobile-menu" id="mobile-menu" href="#"><i id="bars-menu" class="fa-solid fa-bars"></i></a>                    
    </div>
</nav>

{{-- <div class="nav-links-mobile" id="nav-mobile">
    @foreach ($nav_links as $link => $redirect)
        <a class="nav-link" id="{{ $link }}" href="{{ $redirect }}">{{ $link }}</a>            
    @endforeach
</div> --}}
