@extends('layouts.panel_app')

@section('content')
    <div class="login">
        <form method="POST" action={{ route('login.authenticate') }}>
            @csrf
            @method('POST')
            <input type="text" class="user" id="user" name="user" placeholder="Usuario">
            <input type="password" class="pass" id="pass" name="password" placeholder="Contraseña">

            <input type="submit" class="button button-show" value="Iniciar sesion">
        </form>
    </div>
@endsection