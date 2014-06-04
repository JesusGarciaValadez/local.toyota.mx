// JavaScript Document



function left_top()
{
	var elem = $('#id').val();
	elem = $("#"+elem);
	if (elem.length)
	{
		$("#left").val(elem.position().left);
		$("#top").val(elem.position().top);
	}
}

function aplicar_estilos(informar_existe, time)
{
	
	
	delay_anim = $('#delay_anim').val();
	if(delay_anim==""){delay_anim=0;}
	
	
	var elem = $('#id').val();
	elem = $("#"+elem);
	
	if (elem.length)
	{
		
		if($('#origentransf_check').is(':checked')){elem.css({ transformOrigin: $('#origentransf').val() })}
		
		if($('#left_check').is(':checked')){elem.stop(true,true).animate({left:$('#left').val()},delay_anim);}
		if($('#top_check').is(':checked')){elem.stop(true,true).animate({top:$('#top').val()},delay_anim);}
		if($('#width_check').is(':checked')){elem.stop(true,true).animate({width:$('#width').val()},delay_anim);}
		if($('#height_check').is(':checked')){elem.stop(true,true).animate({height:$('#height').val()},delay_anim);}		
		if($('#opacity_check').is(':checked')){elem.stop(true,true).animate({opacity:$('#opacity').val()},delay_anim);}		
		
		
		if($('#rotate_check').is(':checked')){elem.stop(true,true).transition({ rotate: $('#rotate').val()+'deg',duration:  delay_anim});}
		if($('#escale_check').is(':checked')){elem.stop(true,true).transition({ scale: $('#escale').val(),duration:  delay_anim });}
		if($('#sesgarx_check').is(':checked')){elem.stop(true,true).transition({ skewX: $('#sesgarx').val()+'deg',duration:  delay_anim });}
		if($('#sesgary_check').is(':checked')){elem.stop(true,true).transition({ skewY: $('#sesgary').val()+'deg',duration:  delay_anim });}
		
		

		 
		 
		 
		
	}
	else{
		if(informar_existe != false)
		{
			alert('elemto: '+$('#id').val()+' no existe');	
		}
	}
	
	
	//.is(':checked')

	
}
function crear_tracking()
{
	var elem;
	var elemtxt = $('#id').val();
	
	elem = $("#"+elemtxt);
	
	if (elem.length)
	{
		
		 
		 var key_point ="";
		 var time = video.time().secondsTo('hh:mm:ss.ms') ;
		 var animate ="";
		 var transition="";
		 var showhide ="";	
		 var play_pause ="";	 
		 var elem_onclick ="";
		 var seek ="";
		 
		 
		 
		 
		 if($('#click_elem_check').is(':checked'))
		 {			  
		 	elem_onclick = "$('#"+ elemtxt +"').click(function(){<br/>" + $('#click_elem').val().replace("\n", "<br />") +"});</br>"
		 }
		 
		 if($('#seek_check').is(':checked'))
		 {			  
		 	seek = "video.seek('"+$('#seek').val()+"');</br>"
		 }		 
		 
		 
		 if($('#vid_play_check').is(':checked'))
		 {			  
		 	play_pause = "play_video();<br/>"
		 }		 
		 
		 if($('#vid_pause_check').is(':checked'))
		 {			  
		 	play_pause = "pausa_video();<br/>"
		 }			 
		 
		 
			//$('#prev').click(function() {			
			//	video.seek(video.time()- parseFloat($("#salto").val()));				
			//});		 
		 
		 key_point += "<br>//---------------------------------------[ "+time+" ]---------------------------------------------<br>";
		 
		 
		 key_point += "{time: '"+ time +"',fn: function () {<br>";
		 
		 
		 if($('#mostrar').is(':checked')){ showhide = "$('#"+ elemtxt +"').show();<br/>";};
		 if($('#ocultar').is(':checked')){ showhide = "$('#"+ elemtxt +"').hide();<br/>";};
		 if($('#fadein').is(':checked')){ showhide = "$('#"+ elemtxt +"').fadeIn();<br/>";};
		 if($('#fadeout').is(':checked')){ showhide = "$('#"+ elemtxt +"').fadeOut();<br/>";};
		 

		 
		 
		 
		 animate += "$('#"+ elemtxt +"').stop(true,true).animate({";
		 var separador ="";
		 
		 if($('#left_check').is(':checked')){ animate += separador + "left:"+$('#left').val(); separador= ","}
		 if($('#top_check').is(':checked')){ animate += separador + "top:"+$('#top').val(); separador= ","}
		 if($('#width_check').is(':checked')){ animate += separador + "width:"+$('#width').val(); separador= ","}		
		 if($('#height_check').is(':checked')){ animate += separador + "height:"+$('#height').val(); separador= ","}
		 if($('#opacity_check').is(':checked')){ animate += separador + "opacity:"+$('#opacity').val(); separador= ","}
		 
		 animate += "},0);<br>";
		
		
 		 if($('#origentransf_check').is(':checked')){transition += "<br/>$('#"+ elemtxt +"').css({ transformOrigin:'"+ $('#origentransf').val() +"' }); <br/>"};
		 transition += "$('#"+ elemtxt +"').stop(true,true).transition({"; 
		 separador="";		 
		 
		 if($('#rotate_check').is(':checked')){ transition += separador + "rotate:"+$('#rotate').val(); separador= ","};
		 if($('#escale_check').is(':checked')){ transition += separador + "scale:"+$('#escale').val(); separador= ","};
		 if($('#sesgarx_check').is(':checked')){ transition += separador + "skewX:"+$('#sesgarx').val(); separador= ","};
		 if($('#sesgary_check').is(':checked')){ transition += separador + "skewY:"+$('#sesgary').val(); separador= ","};
		
		 transition += ",duration:0});<br/>";
		 
		 
		 
		 if(animate.indexOf("{},0);") >=0 ){animate="";}
		 if(transition.indexOf("{,duration:0});") >=0 ){transition="";}		 
		 
		 
		 key_point += play_pause+seek + showhide + animate +transition + elem_onclick +"}},";
		 
		 
		 
		 $('#trak').append(key_point);
		 
		
	}
	else{alert('elemto: '+$('#id').val()+' no existe');	}
	
	


	
}
function cambia_foto(obj)
{
	
	$("#image_perfil").attr('src',$(obj).attr('src'));
	
	$(obj).removeAttr('width').removeAttr('height');
	
	
	$('#image_perfil').animate({width:$(obj).width(),height:$(obj).height()},500,function(){
		
			$(obj).attr('width',50);
			$(obj).attr('height',50);
		
		});

	

	
	$('#usr_name').val($(obj).attr('title'));
	
	
}			
