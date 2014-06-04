/* INICIO: JQUERY READY */
$(document).ready(function () {	
	
	// SCROLL EN AVISO DE PRIVACIDAD
	$('.scroll').jScrollPane();
	
/* CIERRE: JQUERY READY */
});

// ************************************************************** FUNCIONES *********************************************************
var aleatorio = Math.random(); // RANDOM	

// MOSTRAR EL POP-UP EXTERNO (COMPLETO)	
function ShowPopUpBig(){
	$('#PopUpBig').css('visibility','visible');
	//$('#DivcontentPrincipal').css('border','12px solid #333');
	//$('#PopUpSmall_Light').css('visibility','visible');
	}
// OCULTAR EL POP-UP EXTERNO (COMPLETO)		
function HidePopUpBig(){
	$('#PopUpBig').css('visibility','hidden');
	$('#DivcontentPrincipal').css('border','12px solid #FFF');
	//$('#PopUpSmall_Light').css('visibility','hidden');
	}
	
	
// MOSTRAR EL POP-UP INTERIOR							
function ShowPopUpSmall(){
	$('#PopUpSmall').css('visibility','visible');
	$('#PopUpSmall_Dark').css('visibility','visible');	
	}
// OCULTAR EL POP-UP INTERIOR	
function HidePopUpSmall(){
	$('#PopUpSmall').css('visibility','hidden');	
	$('#PopUpSmall_Dark').css('visibility','hidden');	
	}
	
	
// MOSTRAR EL FORMULARIO DE LA CAMARA
function Show_Camera(){
		$('#iFrmCamara').css('visibility','visible');
		$('#iFrmCamara').height(410);
		$('#iFrmCamara').width(682);
		
		$('#TxtTipoConexionVideo').val('local');
		
	}		
// OCULTAR EL FORMULARIO DE LA CAMARA
function Close_Camera(){
		$('#iFrmCamara').css('visibility','hidden');
		$('#iFrmCamara').height(0);
		$('#iFrmCamara').width(0);
		HidePopUpSmall();
	}	


// MOSTRAR AVISO DE PRIVACIDAD	
function ShowAvisoPrivacidad(tipo){
		$('#TxtEstatusAvisoPrivacidad').val(tipo);
		ShowPopUpSmall();
		$('#AvisoPrivacidad').css('visibility','visible');
		$.get("querys.php?opcion=aviso_privacidad&random=" + aleatorio, function(data){	$("#TextAvisoPrivacidad").html(data);	});	 		
	}
// OCULTAR AVISO DEPRIVACIDAD	
function HideAvisoPrivacidad(){

		// SI SE ABRIO A TRAVES DEL ACCESO DIRECTO

		if($('#TxtEstatusAvisoPrivacidad').val() == 'directo'){

			HidePopUpSmall();

			$('#AvisoPrivacidad').css('visibility','hidden');

		}		

		// SI SE ABRIO DESDE LA CAMARA

		if($('#TxtEstatusAvisoPrivacidad').val() == 'camara'){
			
			// VALIDA SI TIENE CAMARA CONECTADA O NO, PARA REALIZAR EL RESET DE LA CAMAMRA
			if($('#TxtValidaCamara') == 'OK'){
				document.getElementById('iFrmCamara').contentWindow.webcam.reset();
			}
			
			$('#AvisoPrivacidad').css('visibility','hidden');

		}

		$('#TxtEstatusAvisoPrivacidad').val('');// LIMPIAMOS LA CAJA DE TEXTO DEVALIDACION

		

	}						
	
// MONTAMOS EL NOMBRE Y EL ID DE LA FOTO SI SON LOCALES	
function RecibeFotoNombreLocales(name,id){
	$('#TxtTipoConexionVideo').val('local');
	$('#TxtNombreLocal').val(name);
	$('#TxtFotoLocal').val(id);
	
	//INICIO DE VIDEO DESPUES DE FOTO LOCAL
	
	EstructurarFotosCamara();
	
	Showloading(function(){IniciarPorLocal();});	
	}
	
function ShowOpcion(opcion){
	ShowPopUpSmall();
	$('#Content_Opciones').css('visibility','visible');
	$.get("querys.php?opcion=" + opcion + "&random=" + aleatorio, function(data){	$("#Content_Opciones").html(data);	});	
	}
function HideOpcion(){
	HidePopUpSmall();
	$('#Content_Opciones').html('');
	$('#Content_Opciones').css('visibility','hidden');
	}	
	
	
function EstructurarFotosCamara(){	
	$('#ResultadosOcultosAjax').html("");
	$('#ResultadosOcultosAjax').append('<img id="image_perfil"src="webcam/fotos/'+ $('#TxtFotoLocal').val() +'/foto_usuario.jpg" />');
	$('#ResultadosOcultosAjax').append('<img id="perfil_foto1"src="webcam/fotos/'+ $('#TxtFotoLocal').val() +'/foto_usuario.jpg" />');
	$('#ResultadosOcultosAjax').append('<img id="perfil_foto2"src="webcam/fotos/'+ $('#TxtFotoLocal').val() +'/foto_usuario.jpg" />');
	$('#ResultadosOcultosAjax').append('<img id="image_amigo"src="webcam/fotos/'+ $('#TxtFotoLocal').val() +'/foto_usuario.jpg" />');
	$('#ResultadosOcultosAjax').append('<div id="usr_name">'+ $('#TxtNombreLocal').val() +'</div>');
	$('#ResultadosOcultosAjax').append('<div id="usr_friend_name">'+ $('#TxtNombreLocal').val() +'</div>');	
	
	$('#ResultadosOcultosAjax').append("<div id='code_id'>"+$('#TxtFotoLocal').val()+"</div>");
}

function IniciarPorFacebook(){
	Hideloading();
	$('#TxtTipoConexionVideo').val('fb');
	$('#BtnFaceLogout').hide();
	$('#BtnFaceConectado').hide();
	$('#DivLoop').hide();
	$('#DivPrincipalTipoConexion').hide();				
	loop_intro.pause();
	play_video();
	ga('send', 'event', 'interaccion', 'iniciada', 'facebook');		
	
}		
function IniciarPorLocal(){
	Hideloading();
	$('#BtnFaceLogout').hide();
	$('#BtnFaceConectado').hide();
	$('#DivLoop').hide();
	$('#DivPrincipalTipoConexion').hide();				
	loop_intro.pause();
	play_video();
	ga('send', 'event', 'interaccion', 'iniciada', 'foto');		
}	


//SHOW LOADING
function Showloading(onfinish){
	ShowPopUpBig();
	$('#Content_Loading').css('visibility','visible');
	$.get("querys.php?opcion=loading&random=" + aleatorio, function(data){	$("#Content_Loading").html(data); loading_start(0,"",onfinish);});	
	
}

//SHOW LOADING
function Hideloading(){
	$('#Content_Loading').css('visibility','hidden');	
	interaccion_iniciada= true;
	if($.isIPad()){interaccion_iniciada= false;}
	
	$('#btn_play_pausa').show();
	$('#btn_home').show();
	$('#btn_salirCorto').show();	
	$('#btn_play_pausa').removeClass('btn_play');
	$('#btn_home').removeClass('btn_home_lineal');
	if(interaccion_iniciada)
	{
		setTimeout('iniciar_escaneo_video();',10000);	
	}
	
}
//show llamada
function show_llamada()
{
	$('#iframe_llamada').attr("src","QRC/index.php?id=" + $('#code_id').text());	
	$('#iframe_llamada').animate({height:500},1000);
	$('#iframe_llamada').show();	
}
// SI NO SE TIENE UNA CAMARA MANDAMOS UN NOAL TXT PARA INDICARLO
function ValidaCamara(){
	$('#TxtValidaCamara').val('NO');
	}