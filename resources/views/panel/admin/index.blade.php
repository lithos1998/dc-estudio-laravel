@extends('layouts.panel_app')

@section('content')
    <div class="administrador">
        <div class="tables">
            <h3>Servicios</h3>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th class="t-name">Nombre</th>
                            <th class="t-desc">Descripcion</th>
                            <th class="t-act">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as  $service)
                            <tr class="row-table">
                                <td>{{ $service['name'] }}</td>
                                <td>{{ $service['description'] }}</td>
                                <td>
                                    <div class="buttons">
                                        <p class="button button-edit">Editar</p>
                                        <p class="button button-delete">Eliminar</p>
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