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
        "Limpieza integral para consorcios" => "fa-solid fa-building",
        "Limpieza para servicios Airbnb" => "fa-brands fa-airbnb",
        "Instituciones educativas" => "fa-solid fa-school",
        "Empresas y comercios" => "fa-solid fa-shop"
    ];

    public static $socialmedia = ['facebook', 'instagram', 'linkedin'];

    public static $nav_links = [
        "Adm. de consorcio" => "administracion",
        "Consultaria contable" => "contable",
        "Certificaciones" => "certificaciones",
        "New airs" => "newairs",
        // "Blogs" => "blogs"
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
        ]
    ];

    public static $contable = [
        [
            "id" => "impositivo",
            "class" => "fa-solid fa-calculator",
            "title" => "Asesoramiento Impositivo",
            "data" => array(
                "Inscripciones impositivas para el inicio de la actividad en Personas Humanas y/o Jurídicas ante los
                diferentes organismos",
                "Régimen Simplificado para Pequeños Contribuyentes (Monotributo e Ingresos Brutos Locales):
                Confección de Facturas Electrónicas. Recategorización. Modificación de Datos. Bajas. Generación
                de VEP y Boletas de Pagos",
                "Autónomos: Reempadronamiento. Preparación de VEP para su pago mensual",
                "Liquidación Mensual y Anual de Impuestos Nacionales, Provinciales y Municipales: Impuesto a las
                Ganancias. Bienes Personales. IVA. Bienes Personales, Acciones y Participaciones Societarias.
                Ingresos Brutos Local y Convenio Multilateral. Tasa de Seguridad e Higiene",
                "Liquidación de Regímenes de Información, Retención y Percepción. (SICORE)",
                "Empleados de Cuarta Categoría: Elaboración de Declaraciones Juradas Informativas de Ganancias
                y Bienes Personales. Carga de SIRADIG (Formulario 572 Web)",
                "Blanqueos Impositivos, Moratorias y Planes de Facilidades de Pago",
                "Personal de Casas Particulares: Altas y Bajas en AFIP y ART. Emisión de Recibos de Sueldos y VEP
                de Cargas Sociales",
                "Devolución de Percepciones Sujetos No Inscriptos",
                "Asistencia en la atención de inspecciones, fiscalizaciones y requerimientos",
                "Relevamiento de Situación Tributaria",
                "Planificación Impositiva",
                "Asesoramiento Impositivo Integral Personalizado",
                "Agenda de Vencimientos",
                "Solicitud de Certificados: Ingresos de Fondos. ITI. COTI. CETA",
                "Impuesto de Sellos",
                "Impuesto a la Transferencia Gratuita de Bienes en Provincia de Buenos Aires",
                "Actualización constante en novedades impositivas"
            )
        ],
        [
            "id" => "laboral",
            "class" => "fa-solid fa-briefcase",
            "title" => "Asesoramiento Laboral",
            "data" =>  array(
                "Inscripciones como empleador y ante los distintos sindicatos",
                "Tramitación de altas tempranas, modificación y bajas del personal tanto en AFIP como en los
                sindicatos respectivos",
                "Liquidación de Sueldos y Cargas Sociales",
                "Confección del Libro de Sueldos Digital",
                "Presentación de Declaraciones Juradas y Boletas de Sindicatos",
                "Rúbrica de Libro de Sueldos en diferentes formatos",
                "Contratación de ART y Seguro de Vida Obligatorio",
                "Certificaciones de Servicios y Remuneraciones",
                "Asesoramiento"
            )
        ],
        [
            "id" => "auditoria",
            "class" => "fa-solid fa-chart-line",
            "title" => "Auditoría y Asesoramiento Contable",
            "data" => array(
                "Armado y Confección de Estados Contables, Anexos y Notas Complementarias",
                "Informes y Certificaciones Contables",
                "Auditoria de Estados Contables y Especiales. (Administración de Consorcios, Operativas, Circuitos
                Administrativos)",
                "Organización y Copiado de Libros Contables"
            )
        ],
        [
            "id" => "comercial",
            "class" => "fa-regular fa-handshake",
            "title" => "Administración y Comercial",
            "data" =>  array(
                "Análisis de Costos, Presupuestos, Cash Flow e Informes de Gestión",
                "Elaboración y/o Evaluación de Planes de Negocios",
                "Proyecciones de Ventas",
                "Servicio integrado de Pagos a Proveedores y Gestión de Cobranzas",
                "Outsourcing Financiero y Contable"
            )
        ]
    ];

    public static $new_buildings = [
        [
            "Palpa", "Palpa" , "2634", "Belgrano", "2024"
        ],
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