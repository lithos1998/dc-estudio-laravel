@extends('layouts.panel_app')

@section('content')
    <div class="show-budget">
        @if ($budget[0]->status != 'facturado')
            <div class="buttons">
                <a href="/presupuestos/{{ $budget[0]->id }}/edit" class="button button-check"><i class="fa-solid fa-pencil"></i> Editar</a>
                
                <form action="/presupuestos/{{ $budget[0]->id }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este presupuesto?');">
                    @csrf
                    @method('DELETE')
                    <button typo="submit" class="button button-delete"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
                </form>

                <?php
                    if($budget[0]->status != 'Aprobado' ){
                ?>
                        <form class="budgets-create" method="POST" action={{ route('presupuestos.changeStatus', $budget[0]->id) }}>
                            @method('PUT')
                            @csrf
                            <input hidden name="status" value="Aprobado">
                            <button typo="submit" class="button button-aprobe"><i class="fa-solid fa-check"></i> Aprobar</button>
                        </form>
                <?php
                    }
                
                    if($budget[0]->status != 'Rechazado' ){
                ?>
                    <form class="budgets-create" method="POST" action={{ route('presupuestos.changeStatus', $budget[0]->id) }}>
                        @method('PUT')
                        @csrf
                        <input hidden name="status" value="Rechazado">
                        <button typo="submit" class="button button-delete"><i class="fa-solid fa-xmark"></i> Rechazar</button>
                    </form>
                <?php
                    }

                    if($budget[0]->status == 'Aprobado' ){
                ?>
                        <form class="budgets-create" method="GET" action={{ route('ventas.create') }}>
                            @method('GET')
                            <input hidden name="id" value="{{  $budget[0]->id }}">
                            <button typo="submit" class="button button-aprobe"><i class="fa-solid fa-dollar-sign"></i>Crear Venta</button>
                        </form>
                <?php
                    }
                ?>
            </div>
        @endif

        <div class="budget">
            <h2>Presupuesto Nº 00000{{ $budget[0]->id }}/25</h2>

            <div class="client-data">
                <h2>Datos del cliente</h2>
                <p><span>Cliente:</span>{{ $budget[0]->client->fantasy_name }}</p>
                {!! isset($budget[0]->observations) ? '<p><span>Direccion:</span>'. $budget[0]->observations.'</p>' : '' !!}
                {!! isset($budget[0]->client->email) ? '<p><span>Email:</span>'. $budget[0]->client->email.'</p>' : '' !!}
                {!! isset($budget[0]->client->phone) ? '<p><span>Telefono:</span>'. $budget[0]->client->phone.'</p>' : '' !!}
                {!! isset($budget[0]->client->cel_phone) ? '<p><span>Celular:</span>'. $budget[0]->client->cel_phone.'</p>' : '' !!}
            </div>

            <div class="budget-dates">
                <p><span>Fecha presupuesto: </span> {{ $budget[0]->created_at }}</p>
                <p><span>Vencimiento:</span> {{ $budget[0]->expires_at }}</p>
            </div>

            <div class="tables">
                <table>
                     <thead>
                        <tr class="tr-budget">
                            <th class="th-service">Descripcion</th>
                            <th class="th-amount">Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row-table budget-show-row">
                            <td>{{ $budget[0]->item->name }}</td>
                            <td class="t-left">{{ number_format($budget[0]->amount, 0, ',', '.') }} {!! $budget[0]->currency == 'USD' ? 'USD' : '' !!}</td>
                        </tr>
                        <?php
                            $total = $budget[0]->amount;

                            if(isset($budget[0]->discount)){
                                $discount = $total - ($total - ($total * ($budget[0]->discount / 100)));
                                $total = $total - ($total * ($budget[0]->discount / 100));
                        ?>
                                <tr class="row-table budget-show-row">
                                    <td>Bonificacion del {{ $budget[0]->discount }}%</td>
                                    <td class="t-left">-{{ number_format($discount, 0, ',', '.')}}</td>
                                </tr>
                        <?php
                            }

                            if(isset($budget[0]->taxes)){
                                $total_taxes = 0;
                                foreach($budget[0]->taxes as $tax){
                                    $total_taxes = $total_taxes + $tax->amount;
                        ?>
                                    <tr class="row-table budget-show-row">
                                        <td>{{ $tax->name }}</td>
                                        <td class="t-left">{{ number_format($tax->amount, 0, ',', '.') }}</td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                        <tr class="row-table budget-show-row">
                            <td></td>
                            <?php 
                                if($budget[0]->currency == 'USD'){
                            ?>
                                    <td class="row-total t-left">Total (ars): {{ $total_taxes }} -- Total (USD): {{ $total }}</td>
                            <?php
                                }else{
                                    $total = $total + $total_taxes;
                            ?>
                                    <td class="row-total t-left">Total: {{ number_format($total, 0, ',', '.') }}</td>
                            <?php
                                }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection