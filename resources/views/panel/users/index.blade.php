@extends('layouts.panel_app')


@section('content')
    <div class="clients">
        <div class="tables">
            <h3>Usuarios</h3>

            <a href="/usuarios/create" class="add-button">+ Nuevo usuario</a>
            
            <div>
                @if ($users == '[]')
                    <div class="message-div"><span><i class="fa-solid fa-circle-xmark"></i>No se encontraron Usuarios</span></div>
                @else
                    <table>
                        <thead>
                            <tr class="tr-services">
                               <th class="th-user">usuario</th>
                                <th class="th-privi">tipo</th>
                                <th class="t-act">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as  $u)
                                <tr class="row-table">
                                    <td>{{ $u['user'] }}</td>
                                    <td>{{ $u['privileges'] }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="/items/{{ $u['id'] }}/edit" class="button button-edit"><i class="fa-solid fa-pencil"></i></a>
                                            <form action="/items/{{ $u['id'] }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar el item {{ $u['user'] }}?');">
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