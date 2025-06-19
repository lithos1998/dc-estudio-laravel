@extends('layouts.panel_app')


@section('content')
    <div class="create">
        <div class="create-form">
            <form class="clients-create" method="POST" action={{ route('clientes.update', $client[0]["id"]) }}>
                @method('PUT')
                @csrf
                
                <input class="fantasy" type="text" id="fantasy" name="fantasy" placeholder="Nombre de fantasia*" value="{{ $client[0]["fantasy_name"] }}">
                <input class="name" type="text" id="name" name="name" placeholder="Nombre" value="{{ $client[0]["name"] }}">
                <input class="lastname" type="text" id="lastname" name="lastname" placeholder="Apellido" value="{{ $client[0]["lastname"] }}">
                <input class="cuit" type="text" id="cuit" name="cuit" placeholder="Cuit" value="{{ $client[0]["cuit"] }}">
                <select id="category" class="" name="category">
                    <option value="">Categoria</option>
                    <?php
                        $categories = ['administracion','arquitecto','inmobiliaria', 'particular'];

                        foreach($categories as $category){
                            if($client[0]['category'] == $category){
                                $selected = 'selected';
                            }else{
                                $selected = ' ';
                            }
                    ?>
                            <option value="{{ $category }}" {{ $selected }}>{{ $category }}</option>
                    <?php
                        }
                    ?>
                </select>
                <input class="email" type="text" id="email" name="email" placeholder="Email" value="{{ $client[0]["email"] }}">
                <input class="phone" type="number" id="phone" name="phone" placeholder="telefono" value="{{ $client[0]["phone"] }}">
                <input class="cellphone" type="number" id="cellphone" name="cellphone" placeholder="celular" value="{{ $client[0]["cel_phone"] }}">
                <input class="address" type="text" id="address" name="address" placeholder="direccion" value="{{ $client[0]["address"] }}">

                <input class="send-button" type="submit" id="send-client" value="Editar cliente">
            </form>
        </div>    
    </div>

@endsection