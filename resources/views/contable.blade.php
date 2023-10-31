@extends('layouts.app')


@section('content')

    <div class="w-100 section-contable" style="margin-bottom: 200px; margin-top: 40px;">
        <div class="us-contable">
            <h3>Consultaria contable</h3>
            <p>Integrado por jóvenes profesionales con amplia experiencia en materia impositiva, laboral, auditoria y contable, nuestro objetivo es la focalización de las necesidades de los clientes con una atención exclusiva e integradora.</p>
            <p>Acompañamos a pequeños contribuyentes, pymes y empresas a partir de su constitución y durante el desarrollo de sus negocios, con un seguimiento y asesoramiento permanente.</p>
            <p>Nuestra metodología se centra en la confidencialidad en el manejo de la información y en sostener una comunicación fluida con nuestros clientes buscando en todo momento brindar un servicio de excelencia.</p>
        </div>
        
        <div class="contable-services">
            @include('components.contable-div')
        </div>
    </div>

@endsection