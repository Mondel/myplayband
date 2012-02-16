(function($) {
    $.fn.slider = function(opcionesUsuario){

        opciones = $.extend($.fn.slider.opcionesDefault, opcionesUsuario);

        this.hide();
        
        this.find('li[rel=Image]').each(function(a) {
            alert(a);
        });

    };

    $.fn.slider.opciones = {
        cssClass: "MyPlayBandSlider"        
    };
    
    /*
    $.fn.alerter.formato = function(texto){
        var texto = String(text);
        var primera_letra = texto.substring(0,1);
        var resto = texto.substring(1, texto)length);
        return primera_letra+resto;
    };
    */

})(jQuery);