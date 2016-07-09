//Script Plugin Contact Form 7

jQuery(window).on('load', function(){
    jQuery('.pre-loader').css('height','0');
	if (jQuery(this).width() > 768) {
		setTimeout(function(){
			jQuery("#wraper-form").addClass("expandido");
		},2000);
	};

});

jQuery('.panel-default .btn-expandir').click(function(){
    jQuery(this).toggleClass('bg-gray-expandido');
    jQuery(this).find('span').toggle();
});


jQuery(document).ready( function(){
	
    // Poner Imagen de background en el banner de las interiores
    if ( jQuery('.bg-banner') ) {

        var url = jQuery('.bg-banner').attr('src');
        jQuery('.banner-title').css({'background-image':'url(' + url + ')'});

    };

    // Escalar las caracteristica de la plantilla de revestimientos
    if ( jQuery('.parent-height') && jQuery(window).width() > 767 ) {

        jQuery('.parent-height').each(function(){
            var altoPadre = jQuery(this).parent().height();
            jQuery(this).css('min-height', altoPadre + 'px');
        });

    };

    //Agregar clase table a todas las tablas
    if ( jQuery('table') ) {

        jQuery('table').each( function(){

            if (jQuery(window).width() < 550) {
                var tabla = jQuery(this).parent().html();
                var tablaResponsiva = "<div class='table-responsive'> <small>*Deslice hacia el lado para ver la tabla completa.</small><br>" + tabla + "</div>";
                jQuery(this).parent().html(tablaResponsiva);
            };
            
            if ( ! jQuery('table').hasClass('table') ) {
                jQuery('table').addClass('table table-bordered table-custom');
            };
        });

    }

   

});


jQuery(window).resize( function(){

	if ( jQuery('.parent-height') && jQuery(window).width() > 767 ) {

        jQuery(document).each('.parent-height', function(){

            var altoPadre = jQuery(this).parent().height() + 'px';
            jQuery(this).css('min-height', altoPadre);

        });

    };

});

jQuery(window).scroll(function() {

    var ScrollPosition = jQuery(window).scrollTop();
    var AnchoNavegador = jQuery(window).width();
    if (ScrollPosition > 100) {
        if (AnchoNavegador > 767) {
            if (jQuery("#wraper-form").hasClass("expandido")) {
                jQuery("#wraper-form").removeClass("expandido");  
            }
        }
        
    }
    else {
        var AnchoNavegador = jQuery(window).width();

        if (AnchoNavegador > 767) {
            if (!jQuery("#wraper-form").hasClass("expandido")) {
                jQuery("#wraper-form").addClass("expandido");
            }
        }
    }

    if (ScrollPosition > 500 && AnchoNavegador > 768) {
        if( !jQuery('.logo').hasClass('scrolled') ){
            jQuery('.logo').addClass('scrolled');
        }
        if( !jQuery('.navbar-nav > li > a').hasClass('scrolled') ){
            jQuery('.navbar-nav > li > a').addClass('scrolled');
        }
        if( !jQuery('#wraper-form').hasClass('scrolled') ){
            jQuery('#wraper-form').addClass('scrolled');
        }
        if( !jQuery('.navbar-site').hasClass('scrolled') ){
            jQuery('.navbar-site').addClass('scrolled');
        }
    }else{
    	if (AnchoNavegador > 767) {
	        if( jQuery('.logo').hasClass('scrolled') ){
	            jQuery('.logo').removeClass('scrolled');
	        }
	        if( jQuery('.navbar-nav > li > a').hasClass('scrolled') ){
	            jQuery('.navbar-nav > li > a').removeClass('scrolled');
	        }
	        if( jQuery('#wraper-form').hasClass('scrolled') ){
	            jQuery('#wraper-form').removeClass('scrolled');
	        }
	        if( jQuery('.navbar-site').hasClass('scrolled') ){
	            jQuery('.navbar-site').removeClass('scrolled');
	        }
    	}
    }
});

jQuery('.mostrar-formulario').on('click', function(){
	jQuery('#wraper-form').toggleClass('expandido');
});
