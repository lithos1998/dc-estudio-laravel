@extends('layouts.panel_app')


@section('content')
    <div class="clients">
        <div class="tables">
            <h3>Clientes</h3>

            <a href="/clientes/create" class="add-button">+ Agregar clientes</a>

            
            <div>
                @if ($clients == '[]')
                    <div class="message-div"><span><i class="fa-solid fa-circle-xmark"></i>No se encontraron clientes</span></div>
                @else
                    <table>
                        <thead>
                            <tr class="tr-clients">
                                <th class="t-fantasy">Nombre de fantasia</th>
                                <th class="t-cat">Categoria</th>
                                <th class="t-email">Email</th>
                                <th class="t-phones">Telefonos</th>
                                <th class="t-cuit">CUIT</th>
                                <th class="t-addres">Domicilio</th>
                                <th class="t-act">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as  $c)
                                <tr class="row-table">
                                    <td>{{ $c['fantasy_name'] }}</td>
                                    <td>{{ $c['category'] }}</td>
                                    <td>{{ $c['email'] }}</td>
                                    <td>{{ $c['phone'] }} {{ $c['cel_phone'] }}</td>
                                    <td>{{ $c['cuit'] }}</td>
                                    <td>{{ $c['address'] }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="/clientes/{{ $c['id'] }}" class="button button-show"><i class="fa-solid fa-eye"></i></a>
                                            <a href="/clientes/{{ $c['id'] }}/edit" class="button button-edit"><i class="fa-solid fa-pencil"></i></a>
                                            <form action="/clientes/{{ $c['id'] }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este presupuesto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button typo="submit" class="button button-delete"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection