//----------------------------------------------- animacion de botones izq-der ------------------------------
function LR_anim_start(elemento,lr){
	elemento[0].anim_ini =true;
	if(lr==1){
		L_anim(elemento);
	}
	else{
		R_anim(elemento);
	}
}

function L_anim(elemento){
	elemento.animate({left:'+=20'},800,function(){
		if(elemento[0].anim_ini == true){R_anim(elemento);}
	});
}
function R_anim(elemento){
	elemento.animate({left:'-=20'},800,function(){
		if(elemento[0].anim_ini == true){L_anim(elemento);}		
	});
}
function LR_anim_stop(elemento){
	elemento[0].anim_ini =false;
}



//------------------------------------------------ animacioin de textos ------------------------------------

function show_text(contenedor,html_izq,html_der,stile,anim,w_1,w_2,w_3,bottom,original_h,functionx)
{
	var block_1 =	contenedor.find(".text_izq");
	var block_2 =	contenedor.find(".text_der");
	var block_center =	contenedor.find(".central_img");
	
	if(bottom==undefined ){
		bottom=true;
	}
	
	if (bottom == true)
	{
		contenedor.css('bottom',0);
		contenedor.css('top','auto');
	}
	else
	{
		contenedor.css('top',0);
		contenedor.css('bottom','auto');		
	}
	
	
	
	block_1.width(w_1);
	block_center.width(w_2);
	block_2.width(w_3);	
	
	block_1.html(html_izq);
	block_2.html(html_der);
	
	
	contenedor.animate({height:0},0);
	contenedor.animate({height:original_h},300,function(){show_text_animation(contenedor,anim,functionx);});
	contenedor.find("div div div").animate({opacity:0},0);
	
	block_1.animate({height:original_h},0);
	block_2.animate({height:original_h},0);
	block_center.animate({height:original_h},0);
	
	if(stile == "bn")
	{	
		block_1.css("background-image", "url(img/barrFull_b.png)");
		block_2.css("background-image", "url(img/barrFull.png)");
		block_center.css("background-image", "url(img/diag_bn.png)");
	}
	if(stile == "nb")
	{	
		block_1.css("background-image", "url(img/barrFull.png)");
		block_2.css("background-image", "url(img/barrFull_b.png)");
		block_center.css("background-image", "url(img/diag_nb.png)");
	}
	if(stile == "n")
	{	
		block_1.css("background-image", "url(img/barrFull.png)");
	}
	if(stile == "b")
	{	
		block_1.css("background-image", "url(img/barrFull_b.png)");
	}	
	
}



function show_text_animation(contenedor,anim,functionx)
{
	if(functionx == undefined ){functionx=function(){}}
	
		if(anim == 1)
	{
		
		var img =	contenedor.find(".img_txt_cont");
		var txt =	contenedor.find(".tip_txt_cont");
		
		img.css('position','absolute');
		txt.css('position','absolute');
		
		img.animate({left:-60},0);
		txt.animate({left:150},0);
		
		img.animate({opacity:1,left:20},500,'easeOutElastic');
		txt.animate({opacity:1,left:75},500,'easeOutElastic',function(){functionx();});		
	}
	if(anim == 2)
	{	
		var txt1 =	contenedor.find(".txt_cont1");
		var txt2 =	contenedor.find(".txt_cont2");
		
		txt1.css('position','absolute');
		txt2.css('position','absolute');
		txt1.width(832);
		txt2.width(832);
		
		txt1.animate({left:-150,top:5},0);
		txt2.animate({left:150,top:40},0);	
			
		txt1.animate({opacity:1,left:0},500,'easeOutElastic');
		txt2.animate({opacity:1,left:0},500,'easeOutElastic',function(){functionx();});	
	}
	if(anim == 3)
	{	
		var txt1 =	contenedor.find(".txt_cont1");		
		
		txt1.css('position','absolute');		
		txt1.width(832);
		
		txt1.animate({left:520,top:15},0);
			
		txt1.animate({opacity:1,left:370},500,'easeOutElastic',function(){functionx();});
	}		
}

function hide_text(contenedor)
{
	var block_1 =	contenedor.find(".text_izq");
	var block_2 =	contenedor.find(".text_der");

	block_1.html("");
	block_2.html("");	
	contenedor.animate({height:0},500);
}



var direccion=true;
var cont_txt=1;
var loading_id=0;
function anima_loading()
{	
	if(direccion)
	{
		$("#loadin_img_txt").animate({left:'60%',opacity:0},1000);
		$("#loadin_txt_tip").animate({left:'40%',opacity:0},1000,function(){
			text_loading(cont_txt);
			$("#loadin_img_txt").animate({left:'50%',opacity:1},1000,'easeOutElastic');
			$("#loadin_txt_tip").animate({left:'50%',opacity:1},1000,'easeOutElastic');
			
			});
			
		direccion=false;
		cont_txt++;
	}
	else
	{
		$("#loadin_img_txt").animate({left:'40%',opacity:0},1000);
		$("#loadin_txt_tip").animate({left:'60%',opacity:0},1000,function(){
			text_loading(cont_txt);
			$("#loadin_img_txt").animate({left:'50%',opacity:1},1000,'easeOutElastic');
			$("#loadin_txt_tip").animate({left:'50%',opacity:1},1000,'easeOutElastic');			
			});		
		direccion=true;
		cont_txt++
	}
	
	if(cont_txt>5){cont_txt=1;}
	
}
function text_loading(text)
{
	switch(text)
	{
	case 1:
	  $("#loadin_img_txt").html('<img src="images/ecualIcon.png" width="57" height="48" />');
	  $("#loadin_txt_tip").html("<p>No tardamos, el staff está haciendo todo lo posible para que comience el show.</p>");
	  break;
	case 2:
	  $("#loadin_img_txt").html('<img src="images/guitarIcon.png" width="57" height="48" />');
	  $("#loadin_txt_tip").html("<p>Las estrellas se toman su tiempo</p>");
	  break;
	case 3:
	  $("#loadin_img_txt").html('<img src="images/cameraIcon.png" width="57" height="48" />');
	  $("#loadin_txt_tip").html("<p>Aguanta, que la maquillista no encuentra el maquillaje.</p>");
	  break;
	case 4:
	  $("#loadin_img_txt").html('<img src="images/rockIcon.png" width="57" height="48" />');
	  $("#loadin_txt_tip").html("<p>Es momento de presionar con gritos y chiflidos.</p>");
	  break;
	case 5:
	  $("#loadin_img_txt").html('<img src="images/guitarIcon.png" width="57" height="48" />');
	  $("#loadin_txt_tip").html("<p>Como buenos rockstars, nos estamos tomando un par de minutitos antes de salir a escena.</p>");
	  break;	  	  	  
	}
	
}
var loadin_trys =0;
function loading_start(bloque,texto_info,onfinish)
{	

	$('#Content_Loading').css('visibility','visible');
	
	
	$("#loading_bar").stop(true).animate({width:'99%',easing:'linear'},40000);	
	
	if(typeof(tiempo_de_carga_por_bloque[bloque])=="undefined"){// mientras no este lista la variable del tiempo
		if(loadin_trys <15){
			console.log("bw_SD");
			setTimeout(function(){loading_start(bloque,texto_info,onfinish);},1000);		
			return;
			}
		loadin_trys++;
	}
		
	// si aun no se carga la foto de perfil
	if ($('#image_perfil').length){	//existe	
	}else{
		//no existe
		loadin_trys++;
		console.log("fp_inactive");
		if(loadin_trys < 50){
			setTimeout(function(){loading_start(bloque,texto_info,onfinish);},1000);		
			return;	
		}					
	}	
	
	if(!interaccion_iniciada){
		video.seek(0);
	}
	
	
	if(typeof(onfinish)=="undefined"){onfinish=function(){};}	
	

	
	text_loading(1);
	loading_id = setInterval('anima_loading();',5000);
		
	$("#loading_bar").stop(true).animate({width:0},0);	
    $("#loading_bar").stop(true).animate({width:'98%',easing:'linear'},tiempo_de_carga_por_bloque[bloque],function(){
		loading_stop();
		$('#Content_Loading').css('visibility','hidden');
		onfinish();		
		});	
		
		
}
function loading_stop()
{
	clearInterval(loading_id);
}
