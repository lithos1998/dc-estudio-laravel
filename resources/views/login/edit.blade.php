@extends('layouts.panel_app')


@section('content')
    <div class="login">
        <form method="POST" action={{ route('login.changePassword', Auth::user()->id ) }}>
            @method('POST')
            @csrf
            <h4>{{ Auth::user()->user }}</h4>
            
            <input type="password" class="pass" id="pass" name="password" placeholder="Nueva contraseña">

            <input type="submit" class="button button-show" value="Cambiar Contraseña">
        </form>
    </div>
@endsection