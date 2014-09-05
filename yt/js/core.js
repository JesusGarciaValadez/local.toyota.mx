//variables
var seccion;
init =function(){
	seccion = $('section').attr('class');
	seccion = seccion.split(' ');
	seccion = seccion[0];
	
	if(seccion == "secVideo"){
		$('header nav ul li').removeClass('activo');
		$('header nav ul li').eq(0).addClass('activo');
		$('body, header').addClass("bgVideo");
		$('header img').attr('src','images/camionetaVideo.png');
	}
	else if(seccion =="secVehiculo"){
		$('header nav ul li').removeClass('activo');
		$('header nav ul li').eq(1).addClass('activo');
		$('body, header').addClass("bgVehiculo");
		$('header img').attr('src','images/camionetaVehiculo.png');
	}
	else if(seccion =="secPrueba"){
		$('header nav ul li').removeClass('activo');
		$('header nav ul li').eq(2).addClass('activo');
		$('body, header').addClass("bgPrueba");
		$('header img').attr('src','images/camionetaPrueba.png');
	}

	$('.rudezaExterior h3 > a, .rudezaExterior > a').on('click',function(e){
		e.preventDefault();
		$('.coches > a').removeClass('activo');
		$('.rudezaExterior > a').addClass('activo');
		$('.descripcion').hide();
		$('.rudeza').fadeIn();
	});
	$('.maximoConfort h3 > a, .maximoConfort > a').on('click',function(e){
		e.preventDefault();
		$('.coches > a').removeClass('activo');
		$('.maximoConfort > a').addClass('activo');
		$('.descripcion').hide();
		$('.maximo').fadeIn();
	});
	$('.nuevaActitud h3 > a, .nuevaActitud > a').on('click',function(e){
		e.preventDefault();
		$('.coches > a').removeClass('activo');
		$('.nuevaActitud > a').addClass('activo');
		$('.descripcion').hide();
		$('.actitud').fadeIn();
	});
	$('.seguridad h3 > a, .seguridad > a').on('click',function(e){
		e.preventDefault();
		$('.coches > a').removeClass('activo');
		$('.seguridad > a').addClass('activo');
		$('.descripcion').hide();
		$('.segu').fadeIn();
	});
	$('.reset').on('click',function(e){
		e.preventDefault();
		$('.descripcion').fadeOut();
		$('.coches > a').removeClass('activo');
	});

	setSize = function(){

			ham = $('.hamburguesa').is(':visible');
			console.log(ham)

			if(ham == true){
				$('.header nav ul li').hide();
				$('.header nav ul li a').on('click',function(){
					$('.header nav ul li').hide();
				});
			}
			else if( ham == false){
				$('.header nav ul li').attr('style','display:table-cell;');
			}
		}

	$(window).resize(setSize);
	setSize();

	$('.hamburguesa').on("click",function(){
		$('.header nav ul li').toggle("slow")
	});

	//Galeria
	$('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager'
	});

}

$(document).on('ready',init);

function click_handler(div,frame,src,type,cat){
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    var flDiv=document.body.appendChild(document.createElement("div")); 
    flDiv.setAttribute("id",div); 
    flDiv.style.position = "absolute"; 
    flDiv.style.top = "0"; 
    flDiv.style.left = "0"; 
    flDiv.style.width = "1px"; 
    flDiv.style.height = "1px"; 
    flDiv.style.display = "none"; 
    flDiv.innerHTML='<iframe id="'+frame+'" src="https://4493100.fls.doubleclick.net/activityi;src='+src+';type=' + type + ';cat=' + cat + ';ord=' + a + '?" width="1" height="1" frameborder="0"><\/iframe>';
}