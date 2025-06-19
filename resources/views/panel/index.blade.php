@extends('layouts.panel_app')


@section('content')
    <div class="cotizaciones">
        <div class="dolar-blue moneda">
            <h2>Dolar Blue</h2>
            <div class="transaccion">
                <div class="venta">
                    <h3>Venta</h3>  
                    <span id="blueVenta"></span>  
                </div>

                <div class="compra">
                    <h3>Compra</h3> 
                    <span id="blueCompra"></span>  
                </div>
            </div>
            <span id="ultimaBlue"></span>
        
            <script>
                fetch('https://dolarapi.com/v1/dolares/blue')
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Error: ${response.status}`);
                    }
                    return response.json(); 
                })
                .then(data => {
                    document.getElementById('blueVenta').innerText = data['venta'];
                    document.getElementById('blueCompra').innerText = data['compra'];
                    document.getElementById('ultimaBlue').innerText = data['fechaActualizacion'];
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                });

            </script>
        </div>
        
        <div class="dolar-oficial moneda">
            <h2>Dolar Oficial</h2>
            <div class="transaccion">
                <div class="venta">
                    <h3>Venta</h3>  
                    <span id="oficialVenta"></span>  
                </div>

                <div class="compra">
                    <h3>Compra</h3> 
                    <span id="oficialCompra"></span>  
                </div>
            </div>
            <span id="ultimaOficial"></span>
        
            <script>
                fetch('https://dolarapi.com/v1/dolares/oficial')
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Error: ${response.status}`);
                    }
                    return response.json(); 
                })
                .then(data => {
                    document.getElementById('oficialVenta').innerText = data['venta'];
                    document.getElementById('oficialCompra').innerText = data['compra'];
                    document.getElementById('ultimaOficial').innerText = data['fechaActualizacion'];
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                });

            </script>
        </div>
    </div>

@endsection

