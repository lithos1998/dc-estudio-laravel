<div class="social-media">
    @foreach (Data::$socialmedia as $names)
        <a href=""><x-icon :icon="$names"/></a>        
    @endforeach
</div>