$(document).ready(function(){
    var nav_status = 0;

    // go up to the top screen
    $(window).scroll(function () { 
        if ($(window).scrollTop() > 500) {
            // show
            go_position(40);
            show_fixed_navbar('0px');
        }else if ($(window).scrollTop() < 500) {
            // hide
            go_position('-100px');
            show_fixed_navbar('-60px');
        }
    });

    // contable services show and hide
    $('.cont-button').click(function (e) {         
        var class_name = '.'+$(this).attr('id');
        
        // remove and add radius
        $('.div-contable').removeClass('contable_radius');
        $(this).parent().addClass('contable_radius');

        // change beetwen arrows up and down
        $('.arrow-contable').removeClass('fa-chevron-up');
        $('.arrow-contable').addClass('fa-chevron-down');
        $(this).children().removeClass('fa-chevron-down');
        $(this).children().addClass('fa-chevron-up');
        
        // show and hide div data
        $('.cont-list').addClass('d-none');
        $(class_name).removeClass('d-none');
    });
    
    // go to a section
    $('.nav-link').click(function (e) {
        e.preventDefault($(this).attr('id'));
        var seccion = $($(this).attr('href')).offset().top;
        $('html,body').stop().animate({scrollTop: seccion}, 800);
    });

    // go to consorcio abierto's page
    $('.div-qr').click(function (e) { 
        e.preventDefault();
        window.open('https://consorcioabierto.page.link/como-comenzar', '_blank');
    });

    // go to the top of the page
    $('#goUp').click(function (e) { 
        e.preventDefault();
        $('html,body').stop().animate({scrollTop: 0}, 700);
    }); 

    // show and close menu mobile
    $('#mobile-menu').click(function (e) { 
        e.preventDefault();
        if (nav_status == 0) {
            $('.mobile-menu-nav').css("display", "flex");
            nav_status = 1;
        } else {
            close_nav();            
        }       
    }); 

    
    // function to close the menu mobile 
    function close_nav(){
        $('.mobile-menu-nav').css("display", "none");
        nav_status = 0;
    }

    function go_position(position) {
        $('.go-up').css('right', position);
    } 

    function show_fixed_navbar(position){
        if($(window).width() >= 800){
            $('.fixed-nav-bar').css('top', position);
        }
    }
});  


