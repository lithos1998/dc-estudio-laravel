@extends('layouts.panel_app')

@section('content')
    <div class="clients">
        <div class="tables">
            <h3>Impuestos</h3>

            <a href="/impuestos/create" class="add-button">+ Nuevo Impuesto</a>
            
            <div>
                @if ($taxes == '[]')
                    <div class="message-div"><span><i class="fa-solid fa-circle-xmark"></i>No se encontraron impuestos</span></div>
                @else
                    <table>
                        <thead>
                            <tr class="tr-taxes">
                                <th class="th-name">Name</th>
                                <th class="th-amount">Importe</th>
                                <th class="t-act">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($taxes as  $t)
                                <tr class="row-table">
                                    <td>{{ $t['name'] }}</td>
                                    <td>{{ number_format($t['amount'], 0, ',', '.') }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="/impuestos/{{ $t['id'] }}/edit" class="button button-edit"><i class="fa-solid fa-pencil"></i></a>
                                            <form action="/impuestos/{{ $t['id'] }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este presupuesto?');">
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