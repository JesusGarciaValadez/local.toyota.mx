//variables
var seccion;
init =function(){
	seccion = $('section').attr('class');
	seccion = seccion.split(' ');
	seccion = seccion[0];
	
	if(seccion == "secVideo"){
		$('header nav ul li').removeClass('activo');
		$('header nav ul li').eq(0).addClass('activo');
		$('.btnprueba').hide();
	}
	else if(seccion =="secVehiculo"){
		$('header nav ul li').removeClass('activo');
		$('header nav ul li').eq(1).addClass('activo');
	}
	else if(seccion =="secPrueba"){
		$('header nav ul li').removeClass('activo');
		$('.btnprueba').hide();
	}

	$('.coches .menu ul li').on('click',function(){
		type = $(this).data("type");
		activo = $('.coches .menu ul li.activo').data('type');

		$('.coches .menu ul li').removeClass('activo');
		$(this).addClass('activo');

		$('div.'+activo).fadeOut('normal',function(){
			$('div.'+type).fadeIn();
		});

	});

	//Galeria
	$('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager',
	  auto: true,
	  controls: false
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