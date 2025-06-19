@extends('layouts.panel_app')

@section('content')
    <div class="create">
        <div class="create-form">
            <form class="taxes-create" method="POST" action="/items/{{ $item[0]->id }}">
                @method('PUT')
                @csrf

                <input class="name" type="text" id="name" name="name" placeholder="Nombre" value="{{ isset($item[0]->name) ? $item[0]->name : ''  }}">
                <input class="amount" type="number" id="amount" name="amount" placeholder="Importe" value="{{ isset($item[0]->amount) ? $item[0]->amount : ''  }}">

                <input class="send-button" type="submit" id="send-client" value="Editar Item">
            </form>
        </div>    
    </div>
@endsection