@extends('layouts.panel_app')

{{-- @php
    echo $client;
@endphp --}}
@section('content')
    <div class="client">
        <h3>{{ $client->fantasy_name }} - {{ $client->category }}</h3>
        <div class="data">
            <div class="client-data">
                <div class="data-name">
                    <span>Nombre: </span>
                    <span class="data-value">{{ $client->name.' '.$client->lastname }}</span>
                </div>
                <div class="data-mail">
                    <span>Email: </span>
                    <span class="data-value">{{ $client->email }}</span>
                </div>
                <div class="data-phone">
                    <span>Telefono: </span>
                    <span class="data-value">{{ $client->phone }}</span>
                </div>
                <div class="data-cellphone">
                    <span>Celular: </span>
                    <span class="data-value">{{ $client->cel_phone }}</span>
                </div>
                <div class="data-cuit">
                    <span>CUIT: </span>
                    <span class="data-value">{{ $client->cuit }}</span>
                </div>
                <div class="data-direccion">
                    <span>Direccion: </span>
                    <span class="data-value">{{ $client->address }}</span>
                </div>
            </div>
            <div class="client-debt">
                <div class="debt">
                    <span>Deuda: </span>
                    <span class="debt-amount"> 0$</span>
                </div>
            </div>
        </div>

        <div class="tables">
            <div class="client-budget">
                
            </div>

            <div class="client-budget">
            
            </div>
        </div>
    </div>
@endsection