@extends('layouts.panel_app')



@section('content')
    <div class="create">
        <div class="create-form">
            <form class="budgets-create" method="POST" action={{ route('presupuestos.update', $budget[0]->id) }}>
                @method('PUT')
                @csrf

                <div class="select">
                    <span class="form-span">Cliente</span>
                    <select id="client" name="client" disabled >
                        <option value="{{ $budget[0]->client->id }}">{{ $budget[0]->client->fantasy_name }}</option>
                    </select>
                </div>

                <div class="select">
                    <span class="form-span">Servicio</span>
                    <select id="itemSelected" name="item" disabled>
                        <option value="{{ $budget[0]->item->id }}">{{ $budget[0]->item->name }}</option>
                    </select>
                </div>

                <div class="dates">
                    <span class="form-span">Fecha de creacion</span>
                    <input type="date" id="start" name="start" value={{ $budget[0]->created_at }} readonly>
                </div>

                <div class="dates">
                    <span class="form-span">Fecha de vencimiento</span>
                    <input type="date" id="expired" name="expired" value={{ $budget[0]->expires_at }}>
                </div>

                <div class="select taxes">
                    <span class="form-span">Inpuestos</span>
                    <select id="taxes" class="chosen-select" name="taxes[]" multiple>
                        @foreach ($taxes as $t)
                            <option value="{{ $t['id'] }}"
                                @if ($budget[0]->taxes->contains($t->id)) selected @endif>
                                {{ $t['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="status">
                    <span class="form-span">Estado del presupuesto</span>
                    <select  id="status" name="status">
                        <option value="Pendiente" {{ $budget[0]->status == 'Pendiente' ? 'selected' : '' }}><span class="circle-status {{ $budget[0]->status }}">●</span> Pendiente</option>
                        <option value="Aprobado" {{ $budget[0]->status == 'Aprobado' ? 'selected' : '' }}><span class="circle-status {{ $budget[0]->status }}">●</span> Aprobado</option>
                        <option value="Rechazado" {{ $budget[0]->status == 'Rechazado' ? 'selected' : '' }}><span class="circle-status {{ $budget[0]->status }}">●</span> Rechazado</option>
                    </select>
                </div>


                <select class="currency" id="currency" name="currency">
                    <option value="ars" {{ $budget[0]->currency == 'ars' ? 'selected' : '' }}>Pesos Argentinos</option>
                    <option value="USD" {{ $budget[0]->currency == 'USD' ? 'selected' : '' }}>Dolares</option>
                </select>

                <input class="amount" type="number" id="amount" name="amount" placeholder="Importe" value="{{ isset($budget[0]->amount) ? $budget[0]->amount : '' }}">
                
                <div class="dcto">
                    <input class="" type="number" id="dcto" name="dcto" placeholder="Dcto%" value="{{ isset($budget[0]->discount) ? $budget[0]->discount : '' }}"><span><i class="fa-solid fa-percent"></i></span>
                </div>
                

                <div class="textareas">
                    <span class="form-span">Direccion</span>
                    <input type="textarea" class="observations" id="observations" name="observations" value="{{ isset($budget[0]->observations) ? $budget[0]->observations : '' }}">
                </div>

                @if ($budget[0]->status == 'Rechazado')
                    <div class="textareas">
                        <span class="form-span">Detalles</span>
                        <input type="textarea" class="observations" id="details" name="details" value="{{ isset($budget[0]->details) ? $budget[0]->details : '' }}">
                    </div>
                @endif

                <input class="send-button" type="submit" id="send-client" value="Editar presupuesto">
            </form>
        </div>    
    </div>
@endsection