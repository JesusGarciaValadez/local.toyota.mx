$(document).ready(function () {

$.preload( 'img/ipad.png');


			$('#BtnInteraccionDirecta').click(function() {//video lineal
				
				clearInterval(tid_1);
				clearInterval(tid_2);
				clearInterval(tid_3);
				clearInterval(tid_4);
				clearInterval(tid_5);				
				
				
				$('#BtnFaceLogout').hide();
				$('#BtnFaceConectado').hide();
				$('#DivLoop').hide();
				$('#DivPrincipalTipoConexion').hide();				
				loop_intro.pause();	
				
				$('#btn_play_pausa').show();
				$('#btn_home').show();
				$('#btn_salirCorto').show();	
				$('#btn_play_pausa').addClass('btn_play');
				$('#btn_home').addClass('btn_home_lineal');				
				
				video.removeTimeline('first');		
				
				if($.browser.mozilla)
				{					
					video.source('video/video_line.ogv');
				}
				else
				{
					video.source('video/video_line.mp4');
				}

				play_video();
				video.controls(true);
				
				$('#btn_home').addClass('btn_home_lineal');
				setTimeout("play_video();",500);
				setTimeout("play_video();",1000);
				pausa_por_aplicacion=true;
				interaccion_iniciada=false;
				ga('send', 'event', 'interaccion', 'iniciada', 'lineal');	
											
			});				
			
			
			
			$('#btn_escape1').click(function() {				
				video.seek('0:05:54.55');
				play_video();
				$('#select_escape').hide();
				LR_anim_stop($('#btn_escape1'));	
				LR_anim_stop($('#btn_escape2'));
				hide_text($(".info_text"));
				ga('send', 'event', 'interaccion', 'escape', 'izquierda');				
			});			
			$('#btn_escape2').click(function() {
				video.seek('0:06:20.716');
				play_video();
				$('#select_escape').hide();	
				LR_anim_stop($('#btn_escape1'));	
				LR_anim_stop($('#btn_escape2'));
				hide_text($(".info_text"));
				ga('send', 'event', 'interaccion', 'escape', 'derecha');				
			});	
			
			
			
			$('#btn_ropa1').click(function() {
				video.seek('0:01:05.861');
				play_video();
				$('#select_ropa').hide();
				LR_anim_stop($('#btn_ropa1'));	
				LR_anim_stop($('#btn_ropa2'));	
				hide_text($(".info_text"));
				ga('send', 'event', 'interaccion', 'ropa', 'izquierda');				
			});			
			$('#btn_ropa2').click(function() {
				video.seek('0:01:10.233');
				play_video();
				$('#select_ropa').hide();
				LR_anim_stop($('#btn_ropa1'));	
				LR_anim_stop($('#btn_ropa2'));
				hide_text($(".info_text"));
				ga('send', 'event', 'interaccion', 'ropa', 'derecha');						
			});	
			
			
			
			
			
			$('#btn_millonario').click(function() {// sueño millonario
			
				loading_start(1,"cargando sueño...",function(){
					video.enableTimeline('first');	
					video.volume(1);
					video.seek('0:01:48.861');
					play_video();
					setTimeout('play_video();',300);
					ga('send', 'event', 'interaccion', 'sueño', 'rico');										
				});	
				video.disableTimeline('first');							
				$('#menu_select').hide();
				hide_text($(".info_text"));	
				video.volume(0);	
				video.seek('0:01:48.861');
				pausa_video();	
				$.preload( 'img/marco1.png','img/marco2.png','img/mensaje.png');							
			});		
				
			$('#btn_fama').click(function() {//sueño fama
			
			loading_start(2,"cargando sueño...",function(){
					video.enableTimeline('first');
					video.volume(1);
					video.seek('0:04:16.348');
					play_video();
					setTimeout('play_video();',300);
					ga('send', 'event', 'interaccion', 'sueño', 'famoso');					
				});
				video.disableTimeline('first');	
				$('#menu_select').hide();	
				hide_text($(".info_text"));
				video.volume(0);	
				video.seek('0:04:16.348');
				pausa_video();				
				$.preload( 'img/teamo.png','img/fotoFama.png','img/playera.png','img/roxy.jpg','img/lftDir.png','img/rghDir.png','img/batte.png','img/firmaBck.png','img/texturaCartel.png');	
			});	
			
			
			$('#btn_irresistible').click(function() { //sueño irresistible
			loading_start(3,"cargando sueño...",function(){
				video.enableTimeline('first');
				video.volume(1);
				video.seek('0:07:05.091');
				play_video();
				setTimeout('play_video();',300);
				ga('send', 'event', 'interaccion', 'sueño', 'irresistible');				
			});
				video.disableTimeline('first');	
				$('#menu_select').hide();
				hide_text($(".info_text"));
				video.volume(0);
				video.seek('0:07:05.091');
				pausa_video();	
				$.preload( 'img/cube.png','img/cube_light.png','img/cursor.png','img/fire1.png','img/fire2.png','img/fire3.png','img/guitarra01.png','img/guitarra02.png','img/guitarra03.png','img/likeit.png','img/luz1.png','img/luz2.png','img/luz3.png','img/cartel.png','img/rock.png','img/nota.png');				
				
			});	
			
			
			$('#btn_salir').click(function() {
				ShowOpcion('pantalla_salir');
				ga('send', 'event', 'interaccion', 'boton', 'salir_menu_auto');				
			});
			$('#btn_compartir').click(function() {
				if(ultimo_deseo == 'rico'){ShowOpcion('pantalla_share_millonario');}
				if(ultimo_deseo == 'fama'){ShowOpcion('pantalla_share_fama');}
				if(ultimo_deseo == 'irresistible'){ShowOpcion('pantalla_share_irresistible');}
				ga('send', 'event', 'interaccion', 'boton', 'compartir_menu_auto');				
				 		
			});
			
			$('#btn_play_pausa').click(function() {				
				video.playPause();
				if(pausa_por_aplicacion==false)
				{
					pausa_por_aplicacion=true;
					$('#btn_play_pausa').addClass('btn_play');
				}
				else
				{
					pausa_por_aplicacion=false;
					$('#btn_play_pausa').removeClass('btn_play');
				}
				ga('send', 'event', 'interaccion', 'boton', 'pausa');				
			});
			$('#btn_home').click(function() {				
				window.location.href = "index.html";
				ga('send', 'event', 'interaccion', 'boton', 'home');				
			});
			$('#btn_salirCorto').click(function() {
				ShowOpcion('pantalla_share_general');
				ga('send', 'event', 'interaccion', 'boton', 'salir');				
			});
			
			$("#net_err").dblclick(function() {
				play_video(); $("#net_err").hide();
			});
			
							
			
});	

