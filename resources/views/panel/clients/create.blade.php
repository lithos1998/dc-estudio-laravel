@extends('layouts.panel_app')

@section('content')
    <div class="create">
        <div class="create-form">
            <form class="clients-create" method="POST" action="/clientes">
                @method('POST')
                @csrf
                <input class="fantasy" type="text" id="fantasy" name="fantasy" placeholder="Nombre de fantasia*">
                <input class="name" type="text" id="name" name="name" placeholder="Nombre">
                <input class="lastname" type="text" id="lastname" name="lastname" placeholder="Apellido">
                <input class="cuit" type="text" id="cuit" name="cuit" placeholder="Cuit">
                <select id="category" class="" name="category">
                    <option value="">Categoria</option>
                    <?php
                        $categories = ['inmobiliaria',' administracion',' arquitecto', 'particular'];

                        foreach($categories as $category){
                    ?>
                            <option value="{{ $category }}">{{ $category }}</option>
                    <?php
                        }
                    ?>
                </select>
                <input class="email" type="text" id="email" name="email" placeholder="Email">
                <input class="phone" type="number" id="phone" name="phone" placeholder="Telefono">
                <input class="cellphone" type="number" id="cellphone" name="cellphone" placeholder="Celular">
                <input class="address" type="text" id="address" name="address" placeholder="Direccion">

                <input class="send-button" type="submit" id="send-client" value="Agregar cliente">
            </form>
        </div>    
    </div>
@endsection