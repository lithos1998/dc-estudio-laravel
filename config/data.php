<?php

class Data{
    public static $suppliers = [
        'gestionar',
        'newairs',
        'dovalle',
        'matafuegos',
        'marina',
        'consorcioabierto',
        'somos-hogar',
        'energroup',
        'dakari',
        'owl',
        'ascensores'
    ];  

    public static $newairs_services = [
        "Limpieza integral para consorcios" => "building",
        "Limpieza para servicios Airbnb" => "airbnb",
        "Instituciones educativas" => "school",
        "Empresas y comercios" => "shop"
    ];

    public static $socialmedia = ['facebook', 'instagram', 'linkedin'];

    public static $nav_links = [
        "Adm. de consorcio" => "administracion",
        "Consultaria contable" => "contable",
        "Certificaciones" => "certificaciones",
        "New airs" => "newairs",
        "Blogs" => "blogs"
    ];

    public static $select_options = [
        "razon" => "Motivo por la cual se contacta",
        "consorcio" => "Administracion de consorcio",
        "contable" => "Consultaria contable",
        "newairs" => "New airs",
        "certificaciones" => "Certificaciones",
        "otros" => "Otros",
    ];

    public static $form_inputs = [
        [
            "type" => "text",
            "name_id" => "name",
            "class" => "name",
            "pattern" => "",
            "placeholder" => "Nombre y apellido"
        ],
        [
            "type" => "email",
            "name_id" => "email",
            "class" => "email",
            "pattern" => "[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}",
            "placeholder" => "Email: Ejemplo@mail.com"
        ],
        [
            "type" => "reason",
            "name_id" => "reason",
            "class" => "reason",
            "pattern" => "",
            "placeholder" => "Razon por la que se comunica"
        ],
        [
            "type" => "text",
            "name_id" => "address",
            "class" => "address d-none",
            "pattern" => "[a-zA-Z0-9_]",
            "placeholder" => "Domicilio"
        ],
    ];

    public static $contable = [
        [
            "id" => "monotributista",
            "class" => "fa-solid fa-coins",
            "title" => "Monotributista",
            "data" =>  array(
                "Asesoramiento e Inscripción",
                "Categorización según actividad",
                "Liquidación de Ingresos Brutos",
                "Facturación",
                "Re categorización Cuatrimestral",
                "Declaración Jurada Cuatrimestra"
            )
        ],
        [
            "id" => "impositivo",
            "class" => "fa-solid fa-calculator",
            "title" => "Asesoramiento Impositivo",
            "data" => array(
                "Liquidación de impuestos nacionales: ganancias, bienes personales, IVA,  ganancia mínima presunta, bienes personales acciones y participaciones societarias, SICORE, SIRE, impuestos internos, etc. (tanto de personas jurídicas como físicas)",
                "Liquidación de impuestos provinciales: ingresos brutos, convenio multilateral, agentes de recaudación (retenciones y percepciones), sellos, inmobiliario, etc. (tanto de personas jurídicas como físicas)",
                "Presentación de regímenes de información varios: participaciones societarias, régimen informativo de compras y ventas, fideicomisos, representantes de sujetos del exterior, etc",
                "Planeamiento Fiscal",
                "Atención de inspecciones",
                "Contestación de intimaciones y elaboración de descargos",
                "Presentación de moratorias y sinceramientos fiscales (blanqueos)",
                "Relevamiento de situación tributaria y armado de plan de regularización",
                "tención a pequeños contribuyentes: monotributistas y régimen simplificado de ingresos brutos",
                "Cuarta categoría: elaboración de declaraciones juradas informativas de ganancias y bienes personales y carga de Siradig (F.572 web)"
            )
        ],
        [
            "id" => "auditoria",
            "class" => "fa-solid fa-chart-line",
            "title" => "Auditoría y Asesoramiento Contable",
            "data" => array(
                "Auditoría de estados contables de acuerdo con normas y prácticas profesionales nacionales e internacionales",
                "Elaboración de estados contables (balances)",
                "Auditoría operativa",
                "Auditoría societaria",
                "Outsourcing contable",
                "Contabilidad de PYMEs",
                "Consultoría de PYMEs",
                "Relevamiento de sistemas de control interno",
                "Evaluación de procedimientos contables y administrativos",
                "Asesoramiento para la implementación de nuevos sistemas contables",
                "Emisión de informes y certificaciones para fines específicos",
                "Certificaciones de ingresos, de orígenes de fondos, literales, etc"
            )
        ],
        [
            "id" => "societario",
            "class" => "fa-regular fa-handshake",
            "title" => "Asesoramiento Societario",
            "data" =>  array(
                "Constitución de sociedades",
                "Reformas estatutarias y otras inscripciones",
                "Cambio de jurisdicción",
                "Cambio de sede social sin reforma de estatuto",
                "Designación de administradores",
                "I.G.J.: presentación anual de balances y otros trámites",
                "Sociedades extranjeras",
                "Uniones transitorias de empresas",
                "Transferencia de fondos de comercio",
                "Fundaciones, asociaciones civiles y otras entidades sin fines de lucro"
            )
        ],
        [
            "id" => "laboral",
            "class" => "fa-solid fa-briefcase",
            "title" => "Asesoramiento Laboral",
            "data" =>  array(
                "Liquidación de sueldos",
                "Liquidación de cargas sociales",
                "Liquidación de contribuciones sindicales",
                "Certificaciones de servicios y remuneraciones",
                "Libros de sueldos y jornales",
                "Análisis de costos laborales"
            )
        ]
    ];

    public static $new_buildings = [
        [
            "Voir", "Amenabar" , "2913", "Belgrano", "2023"
        ],
        [
            "Rivadavia", "Rivadavia" , "6120", "Caballito", "2023"
        ],
        [
            "Park cid", "Antezana" , "570", "Caballito", "2023"
        ],
        [
            "Ecuador", "Ecuador" , "560", "Balvanera", "2023"
        ]
    ];

    public static $clients = [
        'Av. Rivadavia 6088 ',
        'Jose Maria Moreno 186',
        'Ecuador 560',
        'Mendez de andes 14/16'
    ];

    public static $clients_logo = [
        'moran',
        'voir',
        'crayon',
        'as'
    ];

    public static $checks = [
        'Comunicacion',
        'Voluntad',
        'Transparencia'
    ];

    public static $phone_number = '(+54) 9 11 2787-1148';

    public static $email = 'administracion@dc.ar';

}