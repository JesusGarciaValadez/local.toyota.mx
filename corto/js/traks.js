
function encajar_foto(elemeto,ancho_necesario, alto_necesario, imagen){
	
	var mini_mage_wh = imagen.width();
	var mage_wh="w";
	if(mini_mage_wh > imagen.height()){mini_mage_wh =imagen.height();mage_wh="h";}	
	
	var mini_elem_wh = elemeto.width();
	elem_wh="w";
	if(mini_elem_wh > elemeto.height()){mini_elem_wh =elemeto.height();elem_wh="h";}
	
	
	var relacion_aspecto=0;
	var proporcion=0;
	
	
		
	
	elemeto.css({ transformOrigin:'0px 0px'});
	
	elemeto.css("background-image", "url("+imagen.attr('src')+")");
	elemeto.css("background-position", "center");
	 
	if(elem_wh == "w")
	{
		elemeto.height(mini_mage_wh);
		relacion_aspecto= ancho_necesario/alto_necesario;		
		elemeto.width(elemeto.height()*relacion_aspecto);
		
		proporcion = alto_necesario/elemeto.height();
		elemeto.transition({scale:proporcion,duration:0});
				
	}
	else
	{
		elemeto.width(mini_mage_wh);
		relacion_aspecto= alto_necesario/ancho_necesario;
		elemeto.height(elemeto.width()*relacion_aspecto);
		
		proporcion = ancho_necesario/elemeto.width();
		elemeto.transition({scale:proporcion,duration:0});
	}
	
	
}

function fix_name(nombre,max_)
{
	espacio = nombre.indexOf(" ");
	if( espacio > 0 ){
		nombre= nombre.substring(0,espacio)
	}
	nombre=nombre.substring(0,max_)
	
	nombre= nombre.substring(0,1).toUpperCase()+nombre.substring(1,max_).toLowerCase();	
	return nombre;
}

function inicializar()
{
	
}

(function ($) {
    $.isIPad = function () {
        return (typeof navigator != "undefined" &&
               navigator && navigator.userAgent &&
               navigator.userAgent.match(/iPad/i) != null);
    };
})(jQuery);



function pausa_video(btn)
{
	video.pause();
	pausa_por_aplicacion=true;
	$("#btn_play_pausa").hide();	
}
function play_video(mostrar)
{
	video.play();
	pausa_por_aplicacion=false;
	if(mostrar!=false)
	{
		$("#btn_play_pausa").show();
	}
}

function video_pausado_por_red()
{
	//console.log("escaneo..");
	/*if(video.readyState() < 3)//si el video no esta listo
	{
		if(!pausa_por_aplicacion){
			if(interaccion_iniciada)// si la inteccion ya inicio
			{	
				if(!$.browser.mozilla)
				{	
					setTimeout('play_video(); $("#net_err").hide(); ' ,5000);
					pausa_video();
					$("#net_err").show();
				}
			}
		}
	}*/
	
	if(video.waiting())//si el video esta esperendo por cualquier motivo
	{
		if(!pausa_por_aplicacion){
			if(interaccion_iniciada)// si la inteccion ya inicio
			{	
				if(!$.browser.mozilla)
				{					
					setTimeout('play_video(); $("#net_err").hide(); ' ,5000);
					pausa_video();
					$("#net_err").show();
				}
			}
		}
	}	
	
	if (!video.playing()) 
	{ 
		if(!pausa_por_aplicacion){			
			if(interaccion_iniciada)
			{			
				setTimeout('play_video(); $("#net_err").hide(); ' ,5000);
				pausa_video();
				$("#net_err").show();
			}
		}
	}
}


function iniciar_escaneo_video()
{
	setInterval('video_pausado_por_red();',1000);
	//console.log("escaneo iniciado");	
}
	
var tid_1 =0;
var tid_2 =0;
var tid_3 =0;
var tid_4 =0;
var tid_5 =0;
	


var millonario=false;
var fama=false;
var irresistible =false;
var ultimo_deseo="";
var pausa_por_aplicacion=false;
var interaccion_iniciada=false;


var loop_intro;
var video;

var firma_delay=50;
$(document).ready(function () {
	
	
	$('#BtnFacebook').animate({opacity:.4},0);
	$('#BtnFacebook').css('cursor','auto');
	
	if($.isIPad()){ $('#btn_play_ipad').show(); $("#cont_audio_game").html("");}
	
	if($.browser.msie)
	{
		if(jQuery.browser.version <10)
		{
			$('#DivcontentPrincipal').load('soporte.html');
			ga('send', 'event', 'redirect', 'device no soportado', navigator.userAgent);			
		}
	}

	
	
	video = $.media('#video_to_trak');
	loop_intro = $.media('#loop_intro');
	
			$('#video_to_trak').attr("preload",'auto');
			$('#loop_vid_cont').attr("preload",'auto');	
	
	
	
			$.preload( 'img/diag_bn.png','img/diag_nb.png','img/barrFull.png','img/barrFull_b.png','img/ipad.png','img/pantalla.jpg','img/famaBtn.png','img/irresistBtn.png','img/ricoBtn.png','img/lftArrow.png','img/rghArrow.png','img/salirBtn1.png','img/shareBtn.png','img/concedido.png','images/rock.png','images/rockIcon.png','images/cameraIcon.png','images/ecualIcon.png','images/guitarIcon.png');	



	if($.isIPad())
	{
		setTimeout('video.volume(0);',500);	
		setTimeout('play_video();video.volume(0);',1000);
		setTimeout('video.seek(0);video.volume(1);pausa_video();',2500);		
	}
	else
	{	
		tid_1 = setTimeout("video.disableTimeline('first');video.volume(0);video.seek('0:01:48.861');",500);	
		tid_2 = setTimeout("video.volume(0);video.seek('0:04:16.348');",3500);
		tid_3 = setTimeout("video.volume(0);video.seek('0:04:16.348');",6500);
		tid_4 = setTimeout("video.seek(0);video.volume(1);pausa_video();video.enableTimeline('first');",10000);
		tid_5 = setTimeout("video.seek(0);video.volume(1);pausa_video();",11000);
	}

video.controls(false);
video.ended(function () {
 pausa_por_aplicacion=true;
 interaccion_iniciada=false;
 
});


				
	video.createTimeline('first', {
		enabled: true,
		points: 
[
//---------------------------------------[ 0:01:03.817 ]---------------------------------------------- seleccion ropa
{time: '0:00:00.5',fn: function () {
	$('#cont_qrc').hide();
	$('#iframe_llamada').height(0);	
	
	$.preload( $("#image_perfil").attr('src'),$("#perfil_foto1").attr('src'),$("#perfil_foto2").attr('src'),$("#image_amigo").attr('src'));	
}},
//---------------------------------------[ 0:01:03.817 ]---------------------------------------------- seleccion ropa
{time: '0:01:03.817',fn: function () {
	
	show_text($(".info_text"),$('#txt_ropa').html(),"","n",2,'832','0','0',true,85,function(){
		
		$('#select_ropa').transition({ scale: [1, 0],duration:0 });
		$('#select_ropa').show();
		$('#select_ropa').transition({ scale: [1, 1],duration:200});
		LR_anim_start($('#btn_ropa1'),1);
		LR_anim_start($('#btn_ropa2'),0);
			
	});
	

}},
//---------------------------------------[ 0:01:05.0 ]---------------------------------------------- seleccion ropa
{time: '0:01:05.0',fn: function () {
	pausa_video();
}},	


//---------------------------------------[ 0:05:52.827 ]--------------------------------------------- seleccion escape
{time: '0:05:52.827',fn: function () {
	
	show_text($(".info_text"),$('#txt_bat').html(),"","nb",1,'417','29','385',true,85,function(){
		
		$('#select_escape').transition({ scale: [1, 0],duration:0 });
		$('#select_escape').show();
		$('#select_escape').transition({ scale: [1, 1],duration:200});
		LR_anim_start($('#btn_escape1'),1);
		LR_anim_start($('#btn_escape2'),0);	
			
	});	
	

	

}},
//---------------------------------------[ 0:05:54.3 ]--------------------------------------------- seleccion escape
{time: '0:05:54.3',fn: function () {
	pausa_video();
}},



//-----------------------------------------------------------------------------------------------------------------------------------
//													Selectores de deseo
//-----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------[ 0:01:41.959 ]--------------------------------------------- seleccion de deseo inicial - text
{time: '0:01:41.96',fn: function () {
	show_text($(".info_text"),$('#txt_elegir').html(),"","bn",3,'337','29','466',true,85);
}},
//---------------------------------------[ 0:01:45.848 ]--------------------------------------------- seleccion de deseo inicial
{time: '0:01:45.848',fn: function () {
	$('#menu_select').show();
}},
//---------------------------------------[ 0:01:48.821 ]--------------------------------------------- seleccion de deseo inicial
{time: '0:01:48.821',fn: function () {
	pausa_video();
}},



//---------------------------------------[ 0:04:11.34 ]--------------------------------------------- seleccion de deseo - text
{time: '0:04:11.34',fn: function () {
	show_text($(".info_text"),$('#txt_elegir').html(),"","bn",3,'337','29','466',true,85);
}},
//---------------------------------------[ 0:04:13.671 ]--------------------------------------------- seleccion de deseo
{time: '0:04:13.671',fn: function () {
	$('#menu_select').show();
}},
//---------------------------------------[ 0:04:16.297 ]--------------------------------------------- seleccion de deseo
{time: '0:04:16.297',fn: function () {
	pausa_video();
}},	


//---------------------------------------[ 0:07:01.12 ]--------------------------------------------- seleccion de deseo - text
{time: '0:07:01.12',fn: function () {
	show_text($(".info_text"),$('#txt_elegir').html(),"","bn",3,'337','29','466',true,85);
}},
//---------------------------------------[ 0:07:02.096 ]--------------------------------------------- seleccion de deseo
{time: '0:07:02.096',fn: function () {
	$('#menu_select').show();
}},
//---------------------------------------[ 0:07:05.052 ]--------------------------------------------- seleccion de deseo
{time: '0:07:05.052',fn: function () {
	pausa_video();
}},


//---------------------------------------[ 0:09:40.96 ]---------------------------------------------
{time: '0:09:40.96',fn: function () {
	show_text($(".info_text"),$('#txt_elegir').html(),"","bn",3,'337','29','466',true,85);
}},
//---------------------------------------[ 0:09:43.298 ]--------------------------------------------- seleccion de deseo
{time: '0:09:43.298',fn: function () {
	$('#menu_select').show();
}},
//---------------------------------------[ 0:09:46.197 ]--------------------------------------------- seleccion de deseo
{time: '0:09:46.197',fn: function () {
	pausa_video();
}},



//-----------------------------------------------------------------------------------------------------------------------------------
//													salto a deseo final
//-----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------[ 0:04:04.65 ]--------------------------------------------- deseo millonario
{time: '0:04:04.65',fn: function () {
	millonario=true;
	$('#btn_millonario').addClass('deseo_concedido');
	if(millonario == false && fama == false && irresistible == false){$('#btn_compartir').hide();}else{$('#btn_compartir').show();}
	ultimo_deseo="rico";
	
	if(millonario == true && fama==true && irresistible == true){
		video.seek('0:09:46.211');
	}	
}},
//---------------------------------------[ 0:06:52.810 ]--------------------------------------------- deseo fama
{time: '0:06:52.810',fn: function () {
	fama=true;
	$('#btn_fama').addClass('deseo_concedido');
	if(millonario == false && fama == false && irresistible == false){$('#btn_compartir').hide();}else{$('#btn_compartir').show();}
	ultimo_deseo="fama";
	
	if(millonario == true && fama==true && irresistible == true){
		video.seek('0:09:46.211');
	}
}},
//---------------------------------------[ 0:09:37.52 ]--------------------------------------------- deseo irresistible
{time: '0:09:37.52',fn: function () {
	irresistible=true;
	$('#btn_irresistible').addClass('deseo_concedido');
	if(millonario == false && fama == false && irresistible == false){$('#btn_compartir').hide();}else{$('#btn_compartir').show();}
	ultimo_deseo="irresistible";
	
	if(millonario == true && fama==true && irresistible == true){
		video.seek('0:09:46.211');
	}
}},

//-----------------------------------------------------------------------------------------------------------------------------------
//													Game
//-----------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------[ 0:08:49.904 ]---------------------------------------------
{time: '0:08:49.904',fn: function () {
	$('#game_cont').show();		
	game_play();
}},
//---------------------------------------[ 0:09:18.034 ]---------------------------------------------
{time: '0:09:18.034',fn: function () {
	$('#game_cont').hide();	
}},



//-----------------------------------------------------------------------------------------------------------------------------------
//													interacciones
//-----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------[ 0:00:29.65 ]--------------------------------------------- ipad
{time: '0:00:29.65',fn: function () {
	
	encajar_foto($("#fotoface1"),82,84,$("#image_perfil"));
	encajar_foto($("#fotoface2"),38,38,$("#image_perfil"));
	encajar_foto($("#fotoface3"),32,32,$("#image_perfil"));
	encajar_foto($("#fotoface4"),240,240,$("#image_perfil"));
	$('#fotoface1,#fotoface2,#fotoface3,#fotoface4').stop(true,true).transition({rotate:-4.5,opacity:.8,duration:0});	
	$('#ipad_imgs').show();

}},
//---------------------------------------[ 0:00:31.197 ]--------------------------------------------- ipad
{time: '0:00:31.197',fn: function () {
	$('#ipad_imgs').hide();
}},

//---------------------------------------[ 0:02:34.9 ]--------------------------------------------- entrada Foto millonario 1
{time: '0:02:34.9',fn: function () {
	encajar_foto($("#foto_millonario1"),157,103,$("#perfil_foto1"));
	$('#foto_millonario1').stop(true,true).transition({rotate:-1,duration:0});
	$('#foto_millonario_contenedor1').show();
}},
//---------------------------------------[ 0:02:37.35 ]--------------------------------------------- salida Foto millonario 1
{time: '0:02:37.35',fn: function () {
	$('#foto_millonario_contenedor1').hide();
}},


//---------------------------------------[ 0:02:56.4 ]--------------------------------------------- entrada Foto millonario 2
{time: '0:02:56.4',fn: function () {
	encajar_foto($("#foto_millonario2"),157,103,$("#perfil_foto2"));		
	$('#foto_millonario2').stop(true,true).transition({rotate:-1,duration:0});
	$('#foto_millonario_contenedor2').show();
}},
//---------------------------------------[ 0:02:59.346 ]--------------------------------------------- salida Foto millonario 2
{time: '0:02:59.34',fn: function () {
	$('#foto_millonario_contenedor2').hide();
}},


//---------------------------------------[ 0:03:05.38 ]--------------------------------------------- entrada mensaje celular
{time: '0:03:05.38',fn: function () {
	encajar_foto($("#foto_amigocel"),60,60,$("#image_amigo"));
	$('#foto_amigocel,#nombre_amigocel,#texto_amigocel').stop(true,true).transition({rotate:10,duration:0});
	$("#nombre_amigocel").text(fix_name($('#usr_friend_name').text(),10));
	$('#amigocel_contenedor').show();
}},
//---------------------------------------[ 0:03:09.39 ]--------------------------------------------- salida mensaje celular
{time: '0:03:09.39',fn: function () {
	$('#amigocel_contenedor').hide();
}},


//---------------------------------------[ 0:04:26.598 ]--------------------------------------------- entrada letrero fan
{time: '0:04:26.598',fn: function () {
	$("#letrero_fama").text(fix_name($('#usr_name').text(),10));
	$("#letrero2_fama").text(fix_name($('#usr_name').text(),10));
	$('#letrero_fama').stop(true,true).transition({rotate:8,opacity:.7,duration:0});
	$('#letrero2_fama').stop(true,true).transition({rotate:8,duration:0});
	
	$('#cont_letrero_fama').show();
}},
//---------------------------------------[ 0:04:28.47 ]--------------------------------------------- salida letrero fan
{time: '0:04:28.47',fn: function () {
	$('#cont_letrero_fama').hide();
}},

//---------------------------------------[ 0:04:59.877 ]--------------------------------------------- entrada firma fan
{time: '0:04:59.877',fn: function () {
	$("#firma_fan").text(fix_name($('#usr_name').text(),10));
	$('#firma_fan').stop(true,true).transition({rotate:25,duration:0});
	$("#firma2_fan").text(fix_name($('#usr_name').text(),10));
	$('#firma2_fan').stop(true,true).transition({rotate:25,duration:0});	
	$('#cont_firma_fan').show();
}},
//---------------------------------------[ 0:05:00.915 ]--------------------------------------------- salida firma fan
{time: '0:05:00.915',fn: function () {
	$('#cont_firma_fan').hide();
}},
//---------------------------------------[ 0:04:28.644 ]--------------------------------------------- entrada foto fan
{time: '0:04:28.644',fn: function () {
	encajar_foto($("#foto_fama"),225,303,$("#image_perfil"));
	$('#foto_fama').stop(true,true).transition({opacity:.75,rotate:10.5,skewX:-3,duration:0});
	$('#cont_foto_fama').show();
}},
//---------------------------------------[ 0:04:30.389 ]--------------------------------------------- salida foto fan
{time: '0:04:30.389',fn: function () {
	$('#cont_foto_fama').hide();
}},
		
//---------------------------------------[ 0:04:41.13 ]--------------------------------------------- entrada foto playera
{time: '0:04:41.13',fn: function () {
	encajar_foto($("#foto_playera"),223,262,$("#image_perfil"));
	$('#cont_foto_playera').show();
}},
//---------------------------------------[ 0:04:41.66 ]--------------------------------------------- salida foto playera
{time: '0:04:41.66',fn: function () {
	$('#cont_foto_playera').fadeOut(50);
}},	

//---------------------------------------[ 0:07:31.735 ]--------------------------------------------- entrada cartel irresistible
{time: '0:07:31.735',fn: function () {
	encajar_foto($("#foto_cartel"),300,250,$("#image_perfil"));
	$('#foto_cartel').stop(true,true).transition({rotate:15,duration:0});
	$('#text_foto_cartel').stop(true,true).transition({rotate:-9,duration:0});
	$('#text_foto_cartel').text(fix_name($('#usr_name').text(),9));
	$('#cont_foto_cartel').show();
}},
//---------------------------------------[ 0:07:33.9 ]---------------------------------------------
{time: '0:07:33.9',fn: function () {
	$('#cont_foto_cartel').hide();
}},



//---------------------------------------[ 0:08:15.081 ]--------------------------------------------- rock band text1
{time: '0:08:15.08',fn: function () {
	show_text($(".info_text"),$('#txt_rock_dedos').html(),"","nb",1,'337','29','466',true,85);
}},

//---------------------------------------[ 0:08:20.65 ]---------------------------------------------
{time: '0:08:20.65',fn: function () {
	hide_text($(".info_text"));
}},

//---------------------------------------[ 0:08:31.122 ]--------------------------------------------- text emociona a tus fans
{time: '0:08:31.122',fn: function () {
	show_text($(".info_text"),$('#txt_rock_emociona').html(),"","nb",1,'404','29','399',false,85);	
}},


//---------------------------------------[ 0:08:37.0 ]--------------------------------------------- text intrucciones notas
{time: '0:08:37.0',fn: function () {
	show_text($(".info_text"),$('#txt_notas').html(),"","nb",1,'404','29','399',false,85);
}},
//---------------------------------------[ 0:08:41.0 ]---------------------------------------------
{time: '0:08:41.0',fn: function () {
	$('#game_cont').show();	
}},
//---------------------------------------[ 0:08:42.0 ]---------------------------------------------
{time: '0:08:42.0',fn: function () {
	hide_text($(".info_text"));
}},

//---------------------------------------[ 0:08:47.0 ]--------------------------------------------- 3
{time: '0:08:47.0',fn: function () {
	$('#txt_conteo').text('3');
	$('#txt_conteo').show();
}},

//---------------------------------------[ 0:08:48.0 ]---------------------------------------------  2
{time: '0:08:48.0',fn: function () {
	$('#txt_conteo').text('2');
}},
//---------------------------------------[ 0:08:49.0 ]--------------------------------------------- 1 
{time: '0:08:49.0',fn: function () {
	$('#txt_conteo').text('1');
}},
//---------------------------------------[ 0:08:49.904 ]--------------------------------------------- ocultar conteo
{time: '0:08:49.8',fn: function () {
	$('#txt_conteo').hide();
}},












//---------------------------------------[ 0:10:35.089 ]--------------------------------------------- QR
{time: '0:10:35.089',fn: function () {
	$('#cont_qrc').fadeIn(1500);	
	ga('send', 'event', 'interaccion', 'QR', 'mostrado');
}},
//---------------------------------------[ 0:11:44.87 ]--------------------------------------------- QR move
{time: '0:11:44.87',fn: function () {
	$('#cont_qrc').stop(true,true).animate({left:241},1000);
}},

		
]
	});

});