@extends('layouts.panel_app')

@php
    echo $sales;
    
@endphp

@section('content')
    <div class="clients">
        <div class="tables">
            <h3>Comprobantes de ventas</h3>

            <div>
                <table>
                    <thead>
                        <tr class="tr-sales">
                            <th class="th-first"></th>
                            <th class="th-status">Estado</th>
                            <th class="th-clients">Cliente</th>
                            <th class="th-created">VTO</th>
                            <th class="th-services">Servicio</th>
                            <th class="th-total">Total</th>
                            <th class="th-observations">Direccion</th>
                            <th class="t-act">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as  $s)
                            <tr class="row-table">
                                <td>*</td>
                                <td>{{ $s['status'] }}</td>
                                <td>{{ $s->budget->client['fantasy_name'] }}</td>
                                <td>{{ $s['expires_at'] }}</td>
                                <td>{{ $s->budget->item['name'] }}</td>
                                <td>{{ $s->budget['amount'] }} {{ $s->budget['currency'] }}</td>
                                <td>{{ $s->budget['observations'] }}</td>
                                <td>
                                    <div class="buttons">
                                        <a href="/ventas/{{ $s['id'] }}" class="button button-show"><i class="fa-solid fa-eye"></i></a>
                                        <a href="/ventas/{{ $s['id'] }}/edit" class="button button-edit"><i class="fa-solid fa-pencil"></i></a>
                                        <form action="/ventas/{{ $s['id'] }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta venta?');">
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
            </div>
        </div>
    </div>
@endsection