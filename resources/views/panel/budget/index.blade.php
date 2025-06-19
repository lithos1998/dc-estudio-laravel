@extends('layouts.panel_app')


@section('content')
    <div class="clients">
        <div class="tables">
            <h3>Presupuestos</h3>

            <a href="/presupuestos/create" class="add-button">+ Nuevo Presupuesto</a>
            
            <div class="filters">
                <form method="GET" action="{{ route('presupuestos.index') }}">
                    <select name="status" {{-- onchange="this.form.submit()" --}}>
                        <option value="">-- Todos --</option>
                        <option value="Pendiente" {{ request('status') == 'Pendiente' ? 'selected' : '' }}>Pendientes</option>
                        <option value="Aprobado" {{ request('status') == 'Aprobado' ? 'selected' : '' }}>Aprobados</option>
                        <option value="Rechazado" {{ request('status') == 'Rechazado' ? 'selected' : '' }}>Rechazados</option>
                        <option value="Facturado" {{ request('status') == 'Facturado' ? 'selected' : '' }}>Facturados</option>
                    </select>

                    <div>
                        <input class="search-input" type="search" name="search" placeholder="🔍︎ buscar x cliente">
                    </div>
                    
                    <div>
                        <span>Fecha desde:</span>
                        <input type="date" name="from_date" value="{{ request('from_date') }}">
                    </div>

                    <div>
                        <span>Fecha hasta:</span>
                        <input type="date" name="to_date" value="{{ request('to_date') }}">
                    </div>

                    <input type="submit" class="button button-show" value="Filtrar">

                    <button type="button" class="button button-show" onclick="window.location.href='{{ env('APP_SUBDOMAIN_URL') }}/presupuestos?status=Pendiente'"><i class="fa-solid fa-filter-circle-xmark"></i></button>
                </form>   
            </div>

            <div>
                @if ($budgets == '[]')
                    <div class="message-div"><span><i class="fa-solid fa-circle-xmark"></i>No se encontraron presupuestos</span></div>
                @else
                    <table>
                        <thead>
                            <tr class="tr-budgets">
                                <th class="th-first"></th>
                                <th class="th-status">Estado</th>
                                <th class="th-clients">Cliente</th>
                                <th class="th-created">VTO</th>
                                <th class="th-services">Servicio</th>
                                <th class="th-currency"><i class="fa-solid fa-sack-dollar"></i></th>
                                <th class="th-taxes">Impuestos (ars)</th>
                                <th class="th-amount">Bruto</th>
                                <th class="th-discount">Bonif%</th>
                                <th class="th-total">Total</th>
                                <th class="th-observations">Direccion</th>
                                <th class="t-act">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($budgets as  $b)
                                @php
                                    $sum = 0;
                                    $total = $b['amount'];

                                    //if($b['discount'] != null){
                                    //   $total = $total - ($total * ($b['discount'] / 100));
                                    //}
  
                                    if($b['taxes'] != null){
                                        foreach($b['taxes'] as $t ){
                                            $sum += $t['amount'];
                                        }
                                    
                                        if($b['currency'] == 'ars'){
                                            $total = $sum + $total;
                                        }
                                    }
                                @endphp
                                <tr class="row-table">
                                    <td class="circle-status {{ $b['status'] }}">●</td>
                                    <td>{{ $b['status'] }}</td>
                                    <td>{{ $b->client->fantasy_name }}</td>
                                    <td><span> {{ $b['expires_at'] }}</span></td>
                                    <td>{{ $b->item->name }}</td>
                                    <td>{{ $b['currency'] == 'ars' ? '$' : $b['currency'] }}</td>
                                    <td>{{ $b['taxes'] == null ? '------' :  number_format($sum, 0, ',', '.') }}</td>
                                    <td>{{ number_format($b['amount'], 0, ',', '.') }}</td>
                                    <td>{{ $b['discount'] == null ? '------' :  $b['discount'].'%'}}</td>
                                    <td>{{ number_format($total, 0, ',', '.') }}</td>
                                    <td>{{ $b['observations'] }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="/presupuestos/{{ $b['id'] }}" class="button button-show"><i class="fa-solid fa-eye"></i></a>
                                            @if ($b->status != 'facturado')
                                                <a href="/presupuestos/{{ $b['id'] }}/edit" class="button button-edit"><i class="fa-solid fa-pencil"></i></a>
                                            @endif
                                            <form action="/presupuestos/{{ $b['id'] }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este presupuesto?');">
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