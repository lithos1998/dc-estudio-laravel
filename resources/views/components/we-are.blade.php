<div id="us" class="we-are container">
    <p class="page-title">Quienes somos</p>

    <div class="logo-dc-admin">
        <img class="logo-buildings" src="assets/images/logo.png" alt="">      
        <h1>DC | ESTUDIO COCIANCIH</h1>
    </div>

    <div class="check-group">
        @foreach (Data::$checks as $check )    
            <div class="check">
                <i class="fa-regular fa-circle-check"></i>
                <h2>{{ $check }}</h2>
            </div>
        @endforeach
    </div>

    <div class="admin-presentation-data">
        <p>Con más de 10 años de trayectoria, nosotros proponemos a nuestros clientes una forma diferente de gestión y coordinación de áreas y servicios compartidos, donde el objetivo principal es el cuidado del patrimonio de los proyectos, el mantenimiento óptimo de espacios comunes, como ascensores y jardines, así como una gestión financiera adecuada. Con una atención permanente y personalizada velando por la conservación y cuidado del buen funcionamiento de los servicios que brindamos, para su conford y tranquilidad. Esto es esencial para garantizar la convivencia armoniosa, resolver conflictos y promover la transparencia y la comunicación efectiva entre los propietarios.</p>
    </div>
</div>