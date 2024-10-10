$(document).ready(function(){
    var formulario = $("#form-presupuesto");
    var nombre = $("#name");
    var email = $("#email");
    var telefono = $("#phone");
    var empresa = $("#enterprise");
    var formularioCV = $("#form-CV");
    var cv_nombre = $("#name_cv");
    var cv_email = $("#email_cv");
    var cv_dni = $("#dni_cv");
    var cv_nacimiento = $("#birth_cv");
    var cv_telefono = $("#phone_cv");
    var cv_genre = $("#genre");
    var cv_file = $("#file");
    var nav = $("#main-nav");

    function go_section(section_id){
        var contact_top =  0;
        
        if(section_id != '#Inicio'){
            contact_top = $(section_id).offset().top;
        }

        $("html, body").animate({ scrollTop: contact_top }, 600);
    }

    function validateForm(e){
        if(nombre.val() == '' || nombre.val() == null){
            e.preventDefault();
            nombre.css("border-color", "red");
        }else{
            nombre.css("border-color","#fff");
        }  

        if(email.val() == '' || email.val() == null){
            e.preventDefault();
            email.css("border-color", "red");
        }else{
            email.css("border-color","#fff");
        } 
        
        if(telefono.val() == '' || telefono.val() == null){
            e.preventDefault();
            telefono.css("border-color", "red");
        }else{
            telefono.css("border-color","#fff");
        } 

        if(empresa.val() == '' || empresa.val() == null){
            e.preventDefault();
            empresa.css("border-color", "red");
        }else{
            empresa.css("border-color","#fff");
        }  
    }

    function validateFormCV(e){
        if(cv_nombre.val() == '' || cv_nombre.val() == null){
            e.preventDefault();
            cv_nombre.css("border-color", "red");
        }else{
            cv_nombre.css("border-color","#fff");
        }  

        if(cv_dni.val() == '' || cv_dni.val() == null){
            e.preventDefault();
            cv_dni.css("border-color", "red");
        }else{
            cv_dni.css("border-color","#fff");
        }

        if(cv_nacimiento.val() == '' || cv_nacimiento.val() == null){
            e.preventDefault();
            cv_nacimiento.css("border-color", "red");
        }else{
            cv_nacimiento.css("border-color","#fff");
        }

        if(cv_email.val() == '' || cv_email.val() == null){
            e.preventDefault();
            cv_email.css("border-color", "red");
        }else{
            cv_email.css("border-color","#fff");
        } 

        if(cv_genre.val() == '-' || cv_genre.val() == null){
            e.preventDefault();
            cv_genre.css("border-color", "red");
        }else{
            cv_genre.css("border-color","#fff");
        }
        
        if(cv_telefono.val() == '' || cv_telefono.val() == null){
            e.preventDefault();
            cv_telefono.css("border-color", "red");
        }else{
            cv_telefono.css("border-color","#fff");
        } 

        if(cv_file.val() == '' || cv_file.val() == null){
            e.preventDefault();
            cv_file.css("border-color", "red");
        }else{
            cv_file.css("border-color","#fff");
        }

    }

    $('#Inicio').click(function(e){
        e.preventDefault();
        go_section('#Inicio');
    });

    $('#Servicios').click(function(e){
        e.preventDefault();
        go_section('#services-section');
    });
    
    $('#Nosotros').click(function(e){
        e.preventDefault();
        go_section('#presentation');
    });

    $('#Contacto').click(function(e){
        e.preventDefault();
        go_section('#contact-section');
    });

    $('#Contactanos').click(function(e){
        e.preventDefault();
        go_section('#contact-section');
    });

    $('#close-alert').click(function(e){
        e.preventDefault();
        $("#alert-modal").css("display", "none");
    });

    $(window).scroll(function () { 
        if ($(window).scrollTop() >= 250) {
            nav.css("position", "fixed");
        } else {
            nav.css("position", "unset");
        }
    });

    
    formularioCV.on('submit', validateFormCV);

    formulario.on('submit', validateForm);

});