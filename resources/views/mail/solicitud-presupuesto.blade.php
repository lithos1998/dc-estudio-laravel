<div class="mail" style="flex-direction:column !important">
    <p>{{ $data['nombre'] }} consulta por {{ $data['tramite'] }}</p>
    <p>En razon del rubro {{ $data['rubro'] }} con {{ $data['m2'] }} metros cuadrados</p>
    <p>Ubicado en {{ $data['direccion'] }} </p>
    <h2 style="margin-left: 25px !important">Datos de contacto</h2>
    <p>email: {{ $data['email'] }}</p>
    <p>telefono: {{ $data['telefono'] }}</p>

    <span>Este es un mensaje enviado automaticamente por EstudioDovalle.com no responder</span>

    <span>{{ $_SERVER['REMOTE_ADDR'] }}</span>
</div>