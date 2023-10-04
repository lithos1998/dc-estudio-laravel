@php
    $media = ['facebook', 'instagram', 'linkedin'];
@endphp

<div class="social-media">
    @foreach ($media as $names)
        <a href=""><x-icon :icon="$names"/></a>        
    @endforeach
</div>