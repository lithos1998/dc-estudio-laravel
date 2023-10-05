@foreach (Data::$nav_links as $key => $value )
    <a href="/{{ $value }}" class="nav-buttons-main">{{ $key }}</a>
@endforeach