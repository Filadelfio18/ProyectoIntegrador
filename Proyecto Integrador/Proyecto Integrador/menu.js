/*              Jquery para mostrar el menu responsive, agregando y quitando la clase show*/
jQuery('document').ready(function($){

    var menuBtn = $('.menu-icon'),
        menu = $('.menu ul');

    menuBtn.click(function(){


        if( menu.hasClass('show')){
            menu.removeClass('show');
        }else {
            menu.addClass('show');
        }

        

    });
});
