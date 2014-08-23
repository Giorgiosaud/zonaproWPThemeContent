jQuery(document).ready(function($) {
	console.log("Triggered Ready handler.");
	alCargar();
	
	anchoActual=$(window).width();
	ajustarParallax(anchoActual);
	anchoActual=$(window).width();
});
// ejecutar despues de cada Ajax
$( document ).ajaxStop(function() {
	console.log("Triggered ajaxStop handler.");
	alCargar();

	anchoActual=$(window).width();
	ajustarParallax(anchoActual);
});

$(window).load(function (){
	esconderLoading();
	inicializarParallax();

	console.log("Triggered load handler.");
});
$(window).resize(function(event) {
	anchoActual=$(window).width();
	ajustarParallax(anchoActual);
	$.stellar('refresh');
});
$(window).bind('popstate', function() {
	cargarInformacion(location.pathname);
	// $.stellar('refresh');
});
// Otras Funciones
function esconderLoading(){
	$('.loading').slideUp('slow',function(){
		$.stellar('refresh');
	});
}
function mostrarLoading(){
	$('.loading').slideDown('slow');
}
function ajustarParallax(anchoActual){
	if($('.parallax').length>0){
		stdwidth=1700;
		stdheight=500;
		razon=stdheight/stdwidth;
		altoRequerido=stdheight/stdwidth*anchoActual;
		$('.parallax .contenedorParallax').height(altoRequerido);
	}

}
function inicializarParallax(){
	$.stellar({
		hideDistantElements: false,
		horizontalScrolling: false,
		responsive:true
	});
   $window = $(window);
   
   $('[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
     $(window).scroll(function() {
        var yPos = ($scroll.data('vofset')*razon)-($window.scrollTop() / $scroll.data('speed')); 
        // background position
        var coords = '50% '+ yPos + 'px';
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}
function alCargar(){
	$( '#cbp-qtrotator' ).cbpQTRotator();
	if($(' #da-thumbs > li ').length>0){
		$(' #da-thumbs > li ').each(
		                            function(){$(this).hoverdir({
		                            	hoverDelay : 75
		                            });
		                        });
	}
	queHacer=$('.queHacer');
	if(queHacer.length>0){
		queHacer.mouseenter(function(){
			$(this).children().filter('.tituloQueHacer').fadeToggle();
		});
		queHacer.mouseleave(function(){
			$(this).children().filter('.tituloQueHacer').fadeToggle();
		});
	}
	$('.menu-item a').on('click',function(e){
		e.preventDefault();
		history.pushState({ path: this.path }, '', this.href);
		var $this=$(this),
		href=$this.attr('href'),
		contenedorPrincipal=$('#contenidoPrincipal');
			//saber si el elemento es del menu
			$('.current_page_item').removeClass('current_page_item');
			$this.parent().addClass('current_page_item');
			console.log("elemento de menu");
			cambiarColores(2000,-0.5, 80);
			// cambiar color al elemento del menu
			// 
			// ejecutar consulta
			cargarInformacion(href);
		});
	$('.TrabajoInicio a, .linksProyectos').on('click',function(e){
		e.preventDefault();
		history.pushState({ path: this.path }, '', this.href);
		var $this=$(this),
		href=$this.attr('href'),
		contenedorPrincipal=$('#contenidoPrincipal');
		$('.current_page_item').removeClass('current_page_item');
			//saber si el elemento es del menu
			//
			console.log("no menu");
			// cambiar color al elemento del menu
			cambiarColores(2000,-0.5, 80);
			// ejecutar consulta
			cargarInformacion(href);
		});
}
function cargarInformacion(href){
	mostrarLoading();
	contenedorPrincipal=$('#contenidoPrincipal');
	contenedorPrincipal.slideUp('slow',function(){
		contenedorPrincipal.load(href+' #contenidoPrincipal', function(){
			cargarImagenesycompletar();
					// cambiarColores(2000,-0.5, 80);
				});
	});

}
function cargarImagenesycompletar(){
	imagenes=$('#contenidoPrincipal img');
	cantidadDeImagenes=imagenes.length;
	if(cantidadDeImagenes!=0){
		imagenesCargadas=0;
		$.each(imagenes,function(){
			$(this).load(function(){
				imagenesCargadas=imagenesCargadas+1;
				console.log(imagenesCargadas+ ' de '+	cantidadDeImagenes );
				if(imagenesCargadas==cantidadDeImagenes){
					console.log('imagenes Cargadas');
					contenedorPrincipal=$('#contenidoPrincipal');
					contenedorPrincipal.slideDown('slow',function(){
						esconderLoading();
						$.stellar('refresh');
					});
				}
			});
		});
	}
	else{
		contenedorPrincipal.slideDown('slow',function(){
			esconderLoading();
			$.stellar('refresh');
		});
	}
}
function ColorOpacity(hex, opacity){
	hex = hex.replace('#','');
	r = parseInt(hex.substring(0,2), 16);
	g = parseInt(hex.substring(2,4), 16);
	b = parseInt(hex.substring(4,6), 16);
	result = 'rgba('+r+','+g+','+b+','+opacity/100+')';
	return result;
}
function ColorLuminance(hex, lum) {

	// validate hex string
	hex = String(hex).replace(/[^0-9a-f]/gi, '');
	if (hex.length < 6) {
		hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
	}
	lum = lum || 0;

	// convert to decimal and change luminosity
	var rgb = "#", c, i;
	for (i = 0; i < 3; i++) {
		c = parseInt(hex.substr(i*2,2), 16);
		c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
		rgb += ("00"+c).substr(c.length);
	}

	return rgb;
}
function cambiarColores(Time, oscuridad, opacidad){
	var colores=['#24a388','#249aa3','#2486a3','#27cacf','#2de7ce'];
	Newcolor=colores[Math.round(Math.random()*(4))];
	DarkColor=ColorLuminance(Newcolor,oscuridad);
	opacityColor=ColorOpacity(Newcolor,opacidad);
	$(".header, .imagenQueHacer, .contenedorProyectos, .franjaInferior, .Dark, .da-thumbs li").stop().animate({
		backgroundColor: Newcolor
	}, Time );
	$('.navbar-zonapro li').stop().animate({
		backgroundColor: opacityColor
	},Time);
	$('.navbar-zonapro li').mouseenter(function(){
		$(this).css({
			backgroundColor:DarkColor
		});
	});
	$('.navbar-zonapro li').mouseleave(function(){
		$(this).css({
			backgroundColor: opacityColor
		});
	});
	$('.imagenQSI').stop().animate({
		borderColor: Newcolor
	});
	$('.navbar-zonapro').stop().animate({
		backgroundColor: opacityColor,
		outlineColor: Newcolor,
	}, Time );
	$('.current_page_item').stop().animate({
		backgroundColor: DarkColor
	}, Time );
	$('.tituloQueHacer').stop().animate({
		color: Newcolor
	}, Time );
	$('.da-thumbs .TrabajoInicio a, .da-thumbs .TrabajoInicio a img').stop().animate({
		backgroundColor: Newcolor
	}, Time );
	$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
		hoverDelay : 75
	}); } );
}