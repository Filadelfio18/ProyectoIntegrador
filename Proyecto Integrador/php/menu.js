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

/*              FOOTER             */
document.getElementById("foot01").innerHTML =
"<p><br>Adaptación: Luis Enrique Mora Castañeda,  CBTIS 168,  Programación,  Aplicaciones Web con Base de Datos,  5L</p><br>"+
"<p>Creditos al Profesor Manuel Chávez, por la plantilla utilizada en este proyecto</p><br>"+
"<p>Iconos tomados de : https://www.flaticon.es</p>";