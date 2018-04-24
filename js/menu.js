jQuery("document").ready(function($){
    
    var heightHeader=$('#header').outerHeight();
    var heightLatter=$('#prev_menu').outerHeight();
        
    $(window).scroll(function () {
        if ((heightHeader+heightLatter)<$(this).scrollTop()) {
            $('#mainMenu').css({
                'position':'fixed',
                    'top':'0',
                'width': $('body').outerWidth()});
             } else {
              $('#mainMenu').css({
                'position':'',
                'width':''});
        }
    });
  
});