//variables
var seccion,ligales,totalLi = 0;
var url = 'http://'+document.location.hostname+'/';

init = function(){	

	medidas = function(){
		altura = $(window).height();
		anchura = $(window).width();
		alturaScroll = $(window).scrollTop();
		return;
	}

	seccion = $('section').attr('class');
	seccion = seccion.split(' ');
	seccion = seccion[0];

	coordenadas = function() {
		altHome = $("#cover").offset().top;
		altColores = $("#colores").offset().top;
		altHighlights = $("#highlights").offset().top;
		altGaleria = $("#galeria").offset().top;
		//altHighlights2 = $("#highlights2").offset().top;
		altVersiones = $("#versiones").offset().top;
		altManejo = $("#manejo").offset().top;
	};

	$('.colores h2,.highs li:first-child h1, .galeria h2, .menu, .versiones h2, .manejo h2').onScreen({
		container: window,
		direction: 'vertical',
		doIn: function() {
			$(this).addClass('fadeIn');
		},
		tolerance: 280,
		throttle: 650,
		toggleClass: 'onScreen'
	});

	$('#especial').onScreen({
		container: window,
		direction: 'vertical',
		doIn: function() {
			$(this).addClass('off');
			$('.highlights2 h2').addClass('fadeIn');
		},
		tolerance: 480,
		throttle: 650,
		toggleClass: 'onScreen'
	});

	decideScroll = function(){
		medidas();
		coordenadas();

		// Home
		if(($(this).scrollTop() >= 0) && ($(this).scrollTop() <= (altColores -1))){
			$(".menu2 nav ul li").removeClass('activo');
			$(".menu2").removeClass('fixed');
		}
		// Colores
		else if(($(this).scrollTop() >= altColores) && ($(this).scrollTop() <= (altHighlights -1))){
			$(".menu2").removeClass('fadeInUp');
			$(".menu2").addClass('fixed fadeInDown');
			$(".menu2 nav ul li").removeClass('activo');
			$(".menu2 nav ul li:eq(0)").addClass('activo');
		}
		// Highlights
		else if(($(this).scrollTop() >= altHighlights) && ($(this).scrollTop() <= (altGaleria -1))){
			$(".menu2").removeClass('fadeInUp');
			$(".menu2").addClass('fixed fadeInDown');
			$(".menu2 nav ul li").removeClass('activo');
			$(".menu2 nav ul li:eq(1)").addClass('activo');
		}
		// Galeria
		else if(($(this).scrollTop() >= altGaleria) && ($(this).scrollTop() <= (altVersiones -1))){
			$(".menu2").removeClass('fadeInUp');
			$(".menu2").addClass('fixed fadeInDown');
			$(".menu2 nav ul li").removeClass('activo');
			$(".menu2 nav ul li:eq(2)").addClass('activo');
		}
		// // Highlights2
		// else if(($(this).scrollTop() >= altHighlights2) && ($(this).scrollTop() <= (altVersiones -1))){
		// 	$(".menu2").removeClass('fadeInUp');
		// 	$(".menu2").addClass('fixed fadeInDown');
		// 	$(".menu2 nav ul li").removeClass('activo');
		// 	$(".menu2 nav ul li:eq(3)").addClass('activo');
		// }
		// // Versiones
		else if(($(this).scrollTop() >= altVersiones) && ($(this).scrollTop() <= (altManejo -1))){
			$(".menu2").removeClass('fadeInUp');
			$(".menu2").addClass('fixed fadeInDown');
			$(".menu2 nav ul li").removeClass('activo');
			$(".menu2 nav ul li:eq(3)").addClass('activo');
		}
		// // Manejo
		else if(($(this).scrollTop() >= altManejo)){
			$(".menu2").removeClass('fadeInUp');
			$(".menu2").addClass('fixed fadeInDown');
			$(".menu2 nav ul li").removeClass('activo');
		}
	}

	animaMouse = function(){
		setInterval(function() {
		$('.mouse-dot').css({top:'15%', opacity: 1});
			$('.mouse-dot').animate({
				top: '26%'
			},
			{
				complete: function(){
					$('.mouse-dot').animate({
						opacity: 0
					});
				}
			});}, 1000);
	}

	setSize = function(){
		medidas();
		reelSize();
		headeralto = $('header').height();
		footeralto = $('footer').height();
		// $('section').css("width", anchura).css("margin-top", headeralto);
		if(anchura <= 767){
			moverElementos();
		}
		else if(anchura >= 768){
			resetElementos();
		}
	}

	contador = function(){
		litodos = $('.contGale > div ul li').length;
		liuno = $('.galeria .container ul:eq(0) li').length;
		totalLi = totalLi + liuno;
		$('.galeria .bx-controls-direction .contador sup').text(totalLi);
		$('.galeria .bx-controls-direction .contador sub').text(litodos);
	}

	$('.hamburguesa').on('click',function(){
		$('.menu1 nav').slideToggle( "slow" );
		$('.hamburguesa').toggleClass('activo');
	});

	pantalla = function(){
		var activo = -1
		var litodos = $('.menu li').length

		$('.menufle sub').text(litodos);

		$('.menu li').each(function(index){	
			$(this).on('click', function(){
				activo = index
				var	texto = $('.menu li:eq('+(activo)+')').text();
				$('.menu li').removeClass('activo');
				$(this).addClass('activo');
				$('#especial').removeClass();
				$('#especial').addClass('bg'+(activo)+'');
				$('.highlights2 h2').hide();
				$('.highlights2 h2').html('<span>'+texto+'<span/>');
				$('.parrafo p').hide();
				$('.parrafo p:eq('+(activo)+')').fadeIn('slow');
				$('.menufle sup').text(activo+1);
				if(activo === 0){
					$('span.next i').removeClass('disabled')
					$('span.prev i').addClass('disabled')
				}
				else if(activo >= ($('.menu li').length)-1){
					$('span.prev i').removeClass('disabled')
					$('span.next i').addClass('disabled')
				}
				else{
					$('span.prev i, span.next i').removeClass('disabled')
				}
				return activo;
			});
		});

		$('span.prev').on('click', function(){
			activo = activo-1
			var	texto = $('.menu li:eq('+(activo)+')').text();
			$('.menufle sup').text(activo+1);
			if(activo <= -1){
				activo = -1
				$('span.prev i').addClass('disabled')
				$('.menufle sup').text(activo+2);
			}
			else if(activo >= 0){	
				$('.menu li').removeClass('activo');
				$('.menu li:eq('+activo+')').addClass('activo');
				$('#especial').removeClass();
				$('#especial').addClass('bg'+(activo)+'');
				$('.highlights2 h2').html('<span>'+texto+'<span/>');
				$('.parrafo p').hide();
				$('.parrafo p:eq('+(activo)+')').fadeIn('slow');
				$('span.next i').removeClass('disabled')
				if(activo === 0){
					$('span.prev i').addClass('disabled')
				}
			}
			//console.log(activo+'as')
		
		});	

		$('span.next').on('click', function(){
			activo = activo + 1
			var	texto = $('.menu li:eq('+(activo)+')').text();
			if(activo >= $('.menu li').length){
				activo = ($('.menu li').length)-1
				$('span.next i').addClass('disabled')
			}
			else if(activo <= ($('.menu li').length)-1){	
				$('.menu li').removeClass('activo');
				$('.menu li:eq('+activo+')').addClass('activo');
				$('#especial').removeClass();
				$('#especial').addClass('bg'+(activo)+'');
				$('.highlights2 h2').html('<span>'+texto+'<span/>');
				$('.parrafo p').hide();
				$('.parrafo p:eq('+(activo)+')').fadeIn('slow');
				$('span.prev i').removeClass('disabled')
				if(activo >= ($('.menu li').length)-1){
					$('span.next i').addClass('disabled')
				}
			}
			$('.menufle sup').text(activo+1);
			//console.log(activo+'ps')
		});

		$('#especial').swipe( {
	        //Generic swipe handler for all directions
	        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
				if(direction==='left'){
					$('span.next').trigger('click');
				}else{
					$('span.prev').trigger('click');
				}
	        },
			//Default is 75px, set to 0 for demo so any distance triggers swipe
			threshold:0,
			allowPageScroll:"vertical",
			triggerOnTouchEnd:false
		});

	}

	galeria = function(){
		$('.highs li:eq(0)').fadeIn('slow');
		$('.menuHigh ul li').on('click', function(e){
			e.preventDefault();
			var index = $(this).index();
			$('.menuHigh ul li').removeClass('activo');
			$(this).addClass('activo');
			$('.highs li').hide();
			$('.highs li:eq('+(index)+')').fadeIn('slow');
		});

		$('span.fa-angle-up').on('click', function(e){
			e.preventDefault();
			var index;
			var totales = ($('.menuHigh ul li').length)-1;
			index = $('.menuHigh ul li.activo').index();

			if(totales==index){
				index = totales;
			}

			// console.log(totales);
			// console.log(index);

			var next = index - 1;
			var totales = $('.menuHigh ul li').length - 1;
			$('.menuHigh ul li:eq('+next+')').addClass('activo');
			$('.menuHigh ul li:eq('+index+')').removeClass('activo');
			$('.highs li').hide();
			$('.highs li:eq('+(next)+')').fadeIn('slow');
		});	

		$('span.fa-angle-down').on('click', function(e){
			e.preventDefault();
			
			var index;
			var totales = ($('.menuHigh ul li').length)-1;
			index = $('.menuHigh ul li.activo').index();
			if(totales==index){
				index = -1;
			}

			// console.log(totales);
			// console.log(index);

			var next = index + 1;
			$('.menuHigh ul li:eq('+next+')').addClass('activo');
			$('.menuHigh ul li:eq('+index+')').removeClass('activo');
			$('.highs li').hide();
			$('.highs li:eq('+(next)+')').fadeIn('slow');
		});		
	}

	tooltip = function(){
		$('.highlights2 .container > span').on('click', function(){
			var posicion = $(this).attr('class');
			$(this).toggleClass('activo');
			$('.highlights2 .container > span').not('.'+posicion+'').removeClass('activo');
		});
	}

	finan = function(){
		var current_fs, next_fs, previous_fs; //fieldsets
		var left, opacity, scale; //fieldset properties which we will animate
		var animating; //flag to prevent quick multi-click glitches

		$(".form-next").on('click',function(){
			if(animating) return false;
			animating = true;
			
			var totales = ($('.financia fieldset').length)-1;
			var index = $('.financia fieldset:visible').index();
			

			if(index < totales){
				var contenedor = $('.financia fieldset:visible');
				current_fs = contenedor;
				next_fs = contenedor.next('fieldset');		
	
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now, mx) {
						//as the opacity of current_fs reduces to 0 - stored in "now"
						//1. scale current_fs down to 80%
						scale = 1 - (1 - now) * 0.2;
						//2. bring next_fs from the right(50%)
						left = (now * 50)+"%";
						//3. increase opacity of next_fs to 1 as it moves in
						opacity = 1 - now;
						current_fs.css({'transform': 'scale('+scale+')'});
						next_fs.css({'left': left, 'opacity': opacity});
					}, 
					duration: 800, 
					complete: function(){
						current_fs.hide();
						//show the next fieldset
						next_fs.show(); 
						//activate next step on progressbar using the index of next_fs
						$(".progressbar li").removeClass('active')
						$(".progressbar li").eq(next_fs.index()).addClass("active");
						animating = false;
					}, 
					//this comes from the custom easing plugin
					easing: 'easeInOutBack'
				});
			}else{
				animating = false;
			}
		});

		$(".form-prev").on('click',function(){
			if(animating) return false;
			animating = true;
			
			var totales = ($('.financia fieldset').length)-1;
			var contenedor = $('.financia fieldset:visible');
			var index = $('.financia fieldset:visible').index();

			current_fs = contenedor;
			previous_fs = contenedor.prev('fieldset');

			if(index > 0){
				
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now, mx) {
						//as the opacity of current_fs reduces to 0 - stored in "now"
						//1. scale previous_fs from 80% to 100%
						scale = 0.8 + (1 - now) * 0.2;
						//2. take current_fs to the right(50%) - from 0%
						left = ((1-now) * 50)+"%";
						//3. increase opacity of previous_fs to 1 as it moves in
						opacity = 1 - now;
						current_fs.css({'left': left});
						previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
					}, 
					duration: 800, 
					complete: function(){
						current_fs.hide();
						//show the previous fieldset
						previous_fs.show(); 
						//de-activate current step on progressbar
						$(".progressbar li").removeClass('active')
						$(".progressbar li").eq(previous_fs.index()).addClass("active");
						animating = false;
					}, 
					//this comes from the custom easing plugin
					easing: 'easeInOutBack'
				});
			}else{
				animating = false;
			}
		});
	}

	moverElementos = function(){
		$('.redes').css("display", "block");
		$('.menu1 nav').css("display", "none");
		$('.redes').appendTo('.menu1 nav');
		$('.anuncio').appendTo('.galeria > div:not(#galeria)');
	}

	resetElementos = function(){
		$('.redes').css("display", "table");
		$('.menu1 nav').css("display", "table");
		$('.redes').insertAfter('.hamburguesa');
		$('.anuncio').insertAfter('.bx-wrapper');
	}

	acordeon = function(){
		$('.modelos > div > div h3').on('click', function(){

			if(!$(this).hasClass('activo')){
				$('.modelos > div > div h3').removeClass('activo')		
				$('.modelos > div > div h3 ~ div').slideUp();
			}

			$(this).toggleClass('activo');
			$('~ div', this).slideToggle();

		});
	}

	comboMenu = function(){
		$('#highlights').next();

		$('<select name="filtro" id="filtro" />').insertAfter('#highlights');
		$('.highlights #filtro').append($("<option />").val('').text('Selecciona'));

		$.each($('.menuHigh ul li'), function( index ) {
			var text = $('.menuHigh ul li:eq('+index+')').text();
			var filter = $('.menuHigh ul li:eq('+index+')').data('filter');
			$('.highlights #filtro').append($("<option value="+index+" />").text(text));
		});

		$('.menuHigh').remove();

		$( "#filtro" ).on('change',function() {
			var index = $(this).val();
			$('.menuHigh ul li').removeClass('activo');
			$(this).addClass('activo');
			$('.highs li').hide();
			$('.highs li:eq('+(index)+')').fadeIn('slow');
		});
	}

	inicio = function(){
		setSize();
		contador();
		pantalla();
		galeria();
		animaMouse();
	}
	reelSize = function(){
    	carAlt = $('.colores img').height();
    	$('.car').css('height', carAlt);
    }

	//ThreeSixty
	reel360Gal = function(color){	
		
		$('.car').ThreeSixty({
	        totalFrames: 36,
	        endFrame: 36,
	        //currentFrame: 1,

	        imgList: '.threesixty_images',
	        progress: '.spinner',
	        imagePath: url+'assets/images/reel360/'+color+'/',
	        filePrefix: '',
	        ext: '.jpg',
	        height: 406,
	        width: 1000,
			disableSpin: true,
	        navigation: false,
	        dragging: false,
	        responsive: true
		});
	}

	colorReel = function (colorR){
		reel360Gal(colorR);
		reelSize();
	}

	var cars = ['rojo','blanco','plata','gris','azul','negro'];
	var cars_n = ['Rojo','Blanco','Plata','Gris Metalico','Azul Metalico','Negro'];
	// var cars = ['plata'];
	// var cars_n = ['Plata'];
	var i = 0;
	var total = (cars.length)-1;

	while(i<=total){
		$('.contColors').append('<div class="'+cars[i]+'">')
		i++
	}

	$('.contColors > div:eq(0)').addClass('active');
	
	$('.contColors > div').on('click',function(){
		$('.contColors > div').removeClass('active');
		$(this).addClass('active');
		var colorActive = $('.contColors > div.active').index();
		$('.new-Menu360 span').text(cars_n[colorActive]);
		cambio(colorActive);
	});

	var cambio = function(index){
		var activo = cars[index];
		colorReel(activo);
	}

	$(window).resize(function(){
		setSize();
	});
	
	inicio();

	//genera movimiento sutil del scroll	
	$('a.scroll').on('click', function(e) {  		
		event.preventDefault();
		var $link = $(this);  
		var anchor  = $link.attr('href'); 
		var general =  $(anchor).offset().top
		//general = general - 100;
		$('html, body').stop().animate({scrollTop: general}, 1000);
	});

	//fancybox
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		padding: 0
	});

	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

	$('.contGale div:not(.anuncio)').bxSlider({
		mode:'horizontal',
		infiniteLoop: false,
		pager: false,
		responsive: true,
		hideControlOnEnd: true,
		touchEnabled: false,
		preventDefaultSwipeX: true,
		prevSelector: '#prev',
		nextSelector: '#next',
		onSlidePrev: function(slideElement, oldIndex, newIndex){
			var n = $('.galeria .container ul:eq('+(oldIndex)+') li').length;
			totalLi = totalLi - n;
			$('.galeria .bx-controls-direction .contador sup').text(totalLi);
		},
		onSlideNext: function(slideElement, oldIndex, newIndex){
			var n = $('.galeria .container ul:eq('+(newIndex)+') li').length;
			totalLi = totalLi + n;
			$('.galeria .bx-controls-direction .contador sup').text(totalLi);
		}
	});

	if(seccion == "cover"){
		$('.hamburguesa').css("top", "15px");
		decideScroll();
		$(window).on('scroll',decideScroll);
	}
	else if(seccion == "especificaciones"){
		$(".menu2").remove();
		$("footer a.scroll").attr('href','#especificaciones');
	}
	else if(seccion == "financiamiento"){
		$(".menu2").remove();
		$("footer a.scroll").remove();
		finan();
	}
	else if(seccion == "distribuidoras"){
		$(".menu2").remove();
		$("footer").remove();
	}
	menuEfecto = function(){
		$('header').addClass('animated');
		$('section').swipe( {
	        //Generic swipe handler for all directions
	        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
				if(direction==='up'){
					//console.log('up');
					$('header').removeClass('fadeInDown');
					$('header').addClass('fadeOutUp');
				}else{
					//console.log('down');
					$('header').removeClass('fadeOutUp');
					$('header').addClass('fadeInDown');
				}
	        },
			//Default is 75px, set to 0 for demo so any distance triggers swipe
			threshold:0,
			allowPageScroll:"vertical",
			triggerOnTouchEnd:false
		});
	}
};

$(document).on('ready',init);

$(window).on('load',function(){

	if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		reel360Gal('rojo');
		reelSize();		
	}
	else{
		if(! /iPad/i.test(navigator.userAgent) ) {
			$('section h1, section h2').removeClass('fadeOut');
			$('.modelos > div > div > div').css("display", "none");
			tooltip();
			$('.fancybox').on('click', function(){
				$('html').addClass('fancybox-margin fancybox-lock');
			});
			moverElementos();
			$.each($('.modelos > div > div > div'), function( index ) {
				var h3 = $('.modelos > div > div > div:eq('+index+') h3');
				h3.insertBefore(h3.parent());
			});
			acordeon();
			comboMenu();
			if(seccion == "cover"){
				menuEfecto();
			}
		}
		else{
			tooltip();
			$('.fancybox').on('click', function(){
				$('html').addClass('fancybox-margin fancybox-lock');
			});
		}
	}
})