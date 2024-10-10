@php
    $importacion = [
        "Clasificación Aduanera, Enfoque arancelario y tributario de las mercaderías a importar",
        "Confección, diligenciamiento del SIMI y despacho Aduanero por sistema computarizado (SIM)",
        "Diligenciamiento de encomiendas postales e Importaciones de suma urgencia",
        "Operaciones de Importación/Exportación inscripto en Aduanas de Buenos Aires, Ezeiza, La Plata, Campana, Zarate, Rosario, San Nicolas, Iguazú, Posadas y Clorinda",
        "Recepción y control en puerto de la descarga e ingreso a depósito de la mercadería importada",
        "Retiro de documentaciones pago y control de gastos en Cías. Marítimas y Aéreas",
        "Extensión de garantías de caución aplicables en Importaciones temporales"
    ];

    $exportacion = [
        "Clasificación arancelaria de productos de exportación",
        "Confección y declaración aduanera de permisos de embarque",
        "Gestión de certificados de origen - CAC - Cámara Argentina de Comercio",
        "Recepción y control de cargas de consolidado de contenedores en deposito fiscales, puerto y cargas aérea",
        "Contratación de bodegas de Tte. Marítimo - Aéreo - terrestre",
        "Embalaje y marcas de bultos",
        "Control de entrega en destino",
        "Envío de documentos al exterior",
        "Apoyo logístico de supervisión en puerto o depósitos fiscales",
        "Presentación, control, seguimiento y COBRO REINTEGROS/REEMBOLSOS"
    ];

    $gestiones = [
        "SENASA - Embalajes de madera",
        "SEDI - Sistema estadistico de importacion",
        "SECRETARIA DE INDUSTRIA : TAD - Seguridad electrica - Lealtad comercial",
        "Presentacion de importaciones temporales"
    ];

    $terminales = [
        ["Puerto de Buenos aires", "https://www.argentina.gob.ar/administracion-general-de-puertos-se/puertos/el-puerto"],
        ["Buenos Aires container terminal service", "http://www.bactssa.com.ar/"],
        ["Terminales Rio de la Plata", "https://www.trp.com.ar/"],
        ["APM terminals", "https://www.apmterminals.com/"],
        ["Exolgan", "https://exolgan.itl.com.ar//"]
    ];

    $intereses = [
        ["Guía práctica de importador y el exportador", "http://www.guiapractica.com.ar/"],
        ["Cámara de exportadores de la República Argentina", "https://www.cera.org.ar/index.php"],
        ["Centro de despachantes de aduana", "https://www.cda.org.ar/"],
        ["Aduana Argentina", "https://www.argentina.gob.ar/afip/aduana"],
        ["Cámara argentina de comercio", "https://www.cac.com.ar/"],
        ["AFIP", "https://www.afip.gob.ar/landing/default.asp"],
        ["ALADI –  Asociación Latinoamericana de Integración", "https://www.aladi.org/sitioaladi/"],
        ["SENASA", "https://www.argentina.gob.ar/senasa"],
        ["PCRAM", "https://www.pcram.net/"]
    ];
@endphp


@extends('layouts.app')


@section('content')
     <div class="comercio"> 
        <h2 class="">Comercio exterior</h2>

        <div class="container">
            <p class="comercio-presentacion">Grupo <span>DC Estudio Cociancih</span> ofrece una amplia gama de servicios de comercio exterior, logística y aduana, diseñados para simplificar tus operaciones internacionales. Desde el despacho aduanero hasta la consultoría especializada, contamos con la experiencia y los recursos necesarios para satisfacer tus necesidades más exigentes</p>
        </div>

        <div class="importacion container">
            <div class="importacion-info">
                <p class="page-title">Importacion</p>
                <ul class="comercio-ul">
                    @foreach ($importacion as $item)
                        <li>{{ $item }}.</li>                        
                    @endforeach
                </ul>
            </div>

            <div class="importacion-img">
                <div ></div>
            </div>
        </div>

        <div class="importacion container">
            <div class="importacion-img">
                <div class="expor-img"></div>
            </div>

            <div class="importacion-info">
                <p class="page-title">Exportacion</p>
                <ul class="comercio-ul">
                    @foreach ($exportacion as $item)
                        <li>{{ $item }}.</li>                        
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="importacion container">
            <div class="importacion-info">
                <p class="page-title">Gestiones en entidades publicas</p>
                <ul class="comercio-ul">
                    @foreach ($gestiones as $item)
                        <li>{{ $item }}.</li>                        
                    @endforeach
                </ul>
            </div>

            <div class="importacion-img">
                <div class="gestion-img"></div>
            </div>
        </div>

        <p class="page-title">Links de interes</p>
        <div class="container links-comercio">

            <div class="terminales">
                <p class="page-title">Terminales portuarias</p>
                <ul>
                    @foreach ($terminales as $terminal)
                        <li><a target="_BLANK" href="{{ $terminal[1] }}">{{ $terminal[0] }} <i class="fa-solid fa-right-from-bracket"></i></a></li>
                    @endforeach
                </ul>
            </div>

            <div class="terminales">
                <p class="page-title">Otros</p>
                <ul>
                    @foreach ($intereses as $interes)
                        <li><a target="_BLANK" href="{{ $interes[1] }}">{{ $interes[0] }} <i class="fa-solid fa-right-from-bracket"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection


