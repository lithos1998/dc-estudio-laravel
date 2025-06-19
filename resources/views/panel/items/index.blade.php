@extends('layouts.panel_app')


@section('content')
    <div class="clients">
        <div class="tables">
            <h3>Items de venta</h3>

            <a href="/items/create" class="add-button">+ Nuevo item</a>
            
            <div>
                @if ($items == '[]')
                    <div class="message-div"><span><i class="fa-solid fa-circle-xmark"></i>No se encontraron items</span></div>
                @else
                    <table>
                        <thead>
                            <tr class="tr-services">
                               <th class="th-name">Servicio</th>
                                <th class="th-amount">Importe</th>
                                <th class="t-act">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as  $i)
                                <tr class="row-table">
                                    <td>{{ $i['name'] }}</td>
                                    <td>{{ number_format($i['amount'], 0, ',', '.') }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="/items/{{ $i['id'] }}/edit" class="button button-edit"><i class="fa-solid fa-pencil"></i></a>
                                            <form action="/items/{{ $i['id'] }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar el item {{ $i['name'] }}?');">
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