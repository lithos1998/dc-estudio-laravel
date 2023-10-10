@foreach (Data::$nav_links as $key => $value )
    <a href="/{{ $value }}" id="{{ $value }}-nav" class="nav-buttons-main">{{ $key }}</a>
@endforeach