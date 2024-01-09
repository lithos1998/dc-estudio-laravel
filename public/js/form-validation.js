$(document).ready(function(){
    var select = $('#reason');
    var consorcio = false;
    var formulario = $('#contact-form');    

    select.on('change',
    function(){
        var selectedOption = this.value;
        var inputAddress = $('#address');
        if(selectedOption == 'consorcio'){
            inputAddress.removeClass('d-none');
            consorcio = true;
        }else{
            inputAddress.addClass('d-none');
            consorcio = false;
        }
    });
                                                
    formulario.on('submit', validarForm);

    function validarForm(e){
        var name = $('#name');
        var email = $('#email');
        var address = $('#address');
        var reason = $('#reason');
        var comment = $('#comment');

        if(name.val() == '' || name.val() == null){
            e.preventDefault();
            name.addClass('input-required');
        }else{
            name.removeClass('input-required');
        }  

        if(email.val() == '' || email.val() == null){
            e.preventDefault();
            email.addClass('input-required');
        }else{
            email.removeClass('input-required');
        }                        

        if(address.val() == '' || address.val() == null){
            if (consorcio == true) {                                
                e.preventDefault();
                address.addClass('input-required');
            }
        }else{
            address.removeClass('input-required');
        } 
                                                    
        if(reason.val() == 'razon' || reason.val() == null){
            e.preventDefault();
            reason.addClass('input-required');
        }else{
            reason.removeClass('input-required');
        }    
        
        if(comment.val() == '' || comment.val() == null){
            e.preventDefault();
            comment.addClass('input-required');
        }else{
            comment.removeClass('input-required');
        }  
    }                    
});  