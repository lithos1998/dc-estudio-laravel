@extends('layouts.panel_app')


@section('content')
    <div class="create">
        <div class="create-form">
            <form class="sales-create" method="POST" action={{ route('ventas.store') }}>
                @method('POST')
                @csrf

                <input type="hidden"  name="budget" value="{{ $sale[0]->id }}">

                <div class="select">
                    <span class="form-span">Cliente</span>
                    <input id="client" name="client" disabled value="{{ $sale[0]->client->fantasy_name }}">
                </div>

                <div class="select">
                    <span class="form-span">Servicio</span>
                    <input id="itemSelected" name="item" disabled value="{{ $sale[0]->item->name }}">
                </div>

                <div class="select s-facturador">
                    <span class="form-span">Facturador</span>
                    <select class="" id="facturador" name="facturador">
                        @foreach ( $users as $u )
                            <option value="{{ $u['id'] }}">{{ $u['user'] }}</option>                            
                        @endforeach
                    </select>
                </div>

                <div class="dates">
                    <span class="form-span">Fecha de creacion</span>
                    <input type="date" id="start" name="start" value={{ $sale[0]->created_at }} readonly>
                </div>

                <div class="dates">
                    <span class="form-span">Fecha de vencimiento</span>
                    <input type="date" id="expired" name="expired" value={{ $sale[0]->expires_at }}>
                </div>
                
                @if ($sale[0]->taxes != '[]')    
                    <div class="select taxes">
                        <span class="form-span">Inpuestos</span>
                        <table>
                            <thead>
                                <tr class="tr-services">
                                    <th class="th-name">Impuesto</th>
                                    <th class="th-amount">Importe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sale[0]->taxes as  $t)
                                    <tr class="row-table">
                                        <td>{{ $t['name'] }}</td>
                                        <td>{{ number_format($t['amount'], 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach                      
                            </tbody>
                        </table>
                    </div>
                @endif

               
                <div class="select currency">
                    <input name="currency" disabled value="{{ $sale[0]->currency }}">
                </div>

                <input class="amount" type="number" id="amount" disabled name="amount" placeholder="Importe" value="{{ isset($sale[0]->amount) ? number_format($sale[0]->amount, 0, '','.') : '' }}">
                
                <select class="cuotes" id="cuotes" name="cuotes">
                    <option value="1">1 Cuota x {{ number_format($sale[0]->amount, 0, ',', '.')}}</option>
                    <option value="3">3 Cuotas x {{ number_format(ceil($sale[0]->amount / 3000) * 1000, 0, ',', '.') }}</option>
                    <option value="6">6 Cuotas x {{ number_format(ceil($sale[0]->amount / 6000) * 1000, 0, ',', '.') }}</option>
                    <option value="9">9 Cuotas x {{ number_format(ceil($sale[0]->amount / 9000) * 1000, 0, ',', '.') }}</option>
                    <option value="12">12 Cuotas x {{ number_format(ceil($sale[0]->amount / 12000) * 1000, 0, ',', '.') }}</option>
                </select>
                
                <div class="dcto">
                    <input class="" type="number" id="dcto" name="dcto" disabled placeholder="Dcto%" value="{{ isset($sale[0]->discount) ? $sale[0]->discount : '' }}"><span><i class="fa-solid fa-percent"></i></span>
                </div>

                <div class="textareas">
                    <span class="form-span">Direccion</span>
                    <input type="textarea" disabled class="observations" id="observations" name="observations" value="{{ isset($sale[0]->observations) ? $sale[0]->observations : '' }}">
                </div>

                @if ($sale[0]->status == 'Rechazado')
                    <div class="textareas">
                        <span class="form-span">Detalles</span>
                        <input type="textarea" class="observations" id="details" name="details" value="{{ isset($sale[0]->details) ? $sale[0]->details : '' }}">
                    </div>
                @endif

                <input class="send-button" type="submit" id="send-client" value="Crear Venta">
            </form>
        </div>    
    </div>
@endsection