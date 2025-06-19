@extends('layouts.panel_app')

@section('content')
    <div class="create">
        <div class="create-form">
            <form class="taxes-create" method="POST" action="/items">
                @method('POST')
                @csrf

                <input class="name" type="text" id="name" name="name" placeholder="Nombre">
                <input class="amount" type="number" id="amount" name="amount" placeholder="Importe">

                <input class="send-button" type="submit" id="send-client" value="Agregar Item">
            </form>
        </div>    
    </div>
@endsection