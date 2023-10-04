@extends('layouts.app')


@section('content')

    <div class="w-100 section-contable" style="margin-bottom: 200px; margin-top: 40px;">
        <div class="us-contable">
            <h3>Consultaria contable</h3>
            <p>Estudio especializado en el cuál brindamos asesoramiento en materia de impuestos, contabilidad, consultoría, y sueldos al más alto nivel de profesionalismo, seriedad, responsabilidad y dedicación hacia el cliente.</p>
            <p>Con amplia trayectoria y experiencia tanto en estudios contables como en empresas, en materia impositiva, contable, laboral, logrando por un lado una visión completa y global de los diferentes tipos de negocios y por otro lado teniendo los conocimientos técnicos específicos para asesorar a nuestros clientes en impuestos, contabilidad, sueldos, y consultoría en general.</p>
            <p>Con normas de ética profesional y personal, nuestra filosofía se basa en la confidencialidad en el manejo de la información y en mantener una comunicación fluida y permanente con nuestros clientes buscando en todo momento brindar un servicio de excelencia.</p>
        </div>
        
        <div class="contable-services">
            @include('components.contable-div')
        </div>
    </div>

@endsection