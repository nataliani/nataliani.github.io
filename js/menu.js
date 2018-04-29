jQuery("document").ready(function($){
    
    var heightHeader=$('#header').outerHeight();
    var heightLatter=$('#prev_menu').outerHeight();
    var heightMenu=$('#mainMenu').outerHeight();
        
    $(window).scroll(function () {
        if ((heightHeader+heightLatter-heightMenu)<$(this).scrollTop()) {
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