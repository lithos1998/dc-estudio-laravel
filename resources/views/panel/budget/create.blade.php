@extends('layouts.panel_app')


@section('content')
    <div class="create">
        <div class="create-form">
            <form class="budgets-create" method="POST" action="/presupuestos">
                @method('POST')
                @csrf

                <div class="select">
                    <span class="form-span">Cliente</span>
                    <select id="client" class="select-tag" name="client">
                        <option value="">Seleccionar cliente</option>
                        @foreach ($clients as $c)
                            <option value="{{ $c['id'] }}">{{ $c['fantasy_name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="select">
                    <span class="form-span">Servicio</span>
                    <select id="itemSelect" class="select-tag" name="item">
                        <option value="">Seleccionar servicio</option>
                        @foreach ($items as $i)
                            <option value="{{ $i['id'] }}" data-price="{{ $i['amount'] }}">{{ $i['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                
                <div class="dates">
                    <span class="form-span">Fecha de creación</span>
                    <input type="date" id="start" name="start">
                    <script src="{{ asset('js/script.js') }}"></script>
                </div>

                <div class="dates">
                    <span class="form-span">Fecha de vencimiento</span>
                    <input type="date" id="expired" name="expired">
                </div>

                <div class="select taxes">
                    <span class="form-span">Inpuestos</span>
                    <select id="taxes" class="chosen-select" name="taxes[]" multiple>
                        @foreach ($taxes as $t)
                            <option value="{{ $t['id'] }}">{{ $t['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <select class="currency" id="currency" name="currency">
                    <option value="ars">Pesos Argentinos</option>
                    <option value="USD">Dolares</option>
                </select>

                <input class="amount" type="number" id="amount" name="amount" placeholder="Importe">

                <div class="dcto">
                    <input class="" type="number" id="dcto" name="dcto" placeholder="Dcto%"><span><i class="fa-solid fa-percent"></i></span>
                </div>
               
                <div class="textareas">
                    <span class="form-span">Direccion</span>
                    <input type="textarea" class="observations" id="observations" name="observations">
                </div>


                <input class="send-button" type="submit" id="send-client" value="Agregar presupuesto">
            </form>
        </div>    
    </div>
@endsection