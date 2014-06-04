// Game :)

$(document).ready(function (){	
	game_ini();
		
	$("#game").click(function(e){
		
		if(e.clientY > 0 && e.clientY < $('#marcador').position().top )
		{			
			game_outOfTime();
		}
		if(e.clientY > $('#marcador').position().top + $('#marcador').height() && e.clientY  < $("#game").height() )
		{
			game_outOfTime();
		}		
	});

});

var game_audio1;
var game_audio2;
var game_audio3;
var game_audio4;
var game_audio5;
var game_audio6;
var game_audio7;

var game_timeid =0;
var game_time =27000;
var nota_time =0;
var game_notas_ok =0;
var game_notas_bad =0;




function game_play()
{
	
	nota_time = 700 + Math.floor((Math.random()*500)+1)+Math.floor((Math.random()*500)+1);
	if($.isIPad()){
		nota_time = 1500 + Math.floor((Math.random()*500)+1)+Math.floor((Math.random()*500)+1);
	}
	
	game_timeid=setInterval('add_nota()' ,nota_time);
	
	setTimeout('game_stop()',game_time);
	
	game_ini();
	if(!$.isIPad()){
		$('#marcador_color').pan({fps: 24, speed: 9, dir: 'right'});	
		$('#marcador').pan({fps: 24, speed: 9, dir: 'left'});
	}
	$('#marcador_color').pan({fps: 24, speed: 9, dir: 'right'});
	$('#marcador').pan({fps: 24, speed: 9, dir: 'left'});	
}
function game_stop()
{
	clearInterval(game_timeid);
	if(!$.isIPad()){
		game_audio7.volume(0);	
	}
	game_notas_bad=1;
	video.volume(1);
	video.volume(1);
}

function game_ini()
{
	$('#ilikeit').stop(true,false).transition({scale:.3,duration:0});
	game_notas_ok=0;
	game_notas_bad=0;
	
	if(!$.isIPad()){
		game_audio1 = $.media('#audio1');
		game_audio2 = $.media('#audio2');
		game_audio3 = $.media('#audio3');
		game_audio4 = $.media('#audio4');
		game_audio5 = $.media('#audio5');	
		game_audio7 = $.media('#audio7');		
		
		game_audio1.volume(0.5);
		game_audio2.volume(0.5);
		game_audio3.volume(0.5);
		game_audio5.volume(0.5);		
		
		game_audio7.volume(1);
	}
	
}


function add_nota()
{
	var new_nota = 'nota'+ Math.floor((Math.random()*1000)+1);
	if(!$.isIPad()){	
		$('#game').append($('#original_nota').html().replace('id="x"','id="x'+ new_nota +'"').replace('id="y"','id="y'+new_nota+'"'));

		$('#x'+new_nota).sprite({fps: 24,start_at_frame: 1, no_of_frames: 60});
		$('#y'+new_nota).sprite({fps: 24,start_at_frame: 1, no_of_frames: 60});	
	}
	else
	{	
		$('#game').append($('#original_nota_ipad').html().replace('id="x"','id="x'+ new_nota +'"'));
	}
	
	
	var pos_left = (($('#game').width()/5)* Math.floor((Math.random()*4)+1))-51;
	var pos_top = $('#game').height()+($('#x'+new_nota).height());
	var tiempo_anim = 5000;	
	
	if($.isIPad()){
		tiempo_anim = 10000;		
	}
	
	$('#x'+new_nota).animate({left:pos_left,width:73},0);
	$('#x'+new_nota).animate({ top:pos_top,easing:'linear'},tiempo_anim,function(){destroy_nota($(this));});
	

	
	$('#x'+new_nota).animate({width:73},0);
	
	$('#x'+new_nota).click(function(event){
		event.stopPropagation();
		var posThis = $(this).position().top + ($(this).height()/2);
		var posMarcador_ini = $('#marcador').position().top ;
		var posMarcador_fin = $('#marcador').position().top + ($('#marcador').height());
		
		if( posThis > posMarcador_ini && posThis < posMarcador_fin)
		{			
			destroy_nota($(this),true); 
			game_onTime($(this));
						
		}
		else
		{
			game_outOfTime($(this));
		}

	});
	

	

	
}

function destroy_nota(obj,explosion)
{
	if(explosion == true)
	{	
		obj.css('zIndex',1);
		
		if ($.browser.msie == true)  // si es IE
		{
			create_fx_ie(obj,'luz');
			setTimeout(function(){	
				obj.remove();
				},300);
			game_notas_bad--;
		}
		else{
			var time_destro = 500;
			if(!$.isIPad()){
				create_fx(obj,'luz');
				time_destro=1000;
			}
			obj.stop(true,false).transition({scale:0.1,opacity:1,duration:time_destro,easing:'linear'},function() {
					obj.remove();
			});
		}
		

	}
	else
	{
		obj.remove();

		game_notas_bad++; 
		if(game_notas_bad > 3)
		{
			if(!$.isIPad()){
				if (!game_audio7.playing()) {
					game_audio7.seek (0);
					game_audio7.play();
				}
			}
	
		}	
			
	}



}
// ************************************** efecto 
function create_fx(obj_cont,class_fx)
{	
	var num_luces = 8;
	
	for (i=0;i < num_luces;i++)
	{
		setTimeout(function(){add_fx(obj_cont,class_fx);},i*50);
	}		
}
function add_fx(obj_cont,class_fx)
{
	var duration =500;	
	var tiempo = 500;
	var escala = 2;	
	var rand_grados = Math.floor((Math.random()*120)+1);	
	var luz_id = 'luz'+Math.floor((Math.random()*1000)+1);	
	var luznum = Math.floor((Math.random()*3)+1);
	
	obj_cont.append('<div class="'+class_fx+''+luznum+'" id=""></div>'.replace('id=""','id="'+ luz_id +'"'));

	var center_l = (obj_cont.width()/2  ) - ( $('#'+luz_id).width()/2  );
	var center_t = (obj_cont.height()/2 ) - ( $('#'+luz_id).height()/2 );
	
	$('#'+luz_id).stop(true,true).transition({left:center_l,top:center_t,rotate:'+='+rand_grados,scale:.1,opacity:0,duration:0,easing:'linear'});
	
	$('#'+luz_id).stop(true,true).transition({rotate:'+='+rand_grados,scale:1,opacity:1,duration:duration/2,easing:'linear'},function() {
		$('#'+luz_id).stop(true,true).transition({rotate:'+='+rand_grados,scale:1+escala,opacity:0,duration:duration/2,easing:'linear'},function() {
				$('#'+luz_id).remove();	
			});
		});			
}
// ************************************** efectos IE
function create_fx_ie(obj_cont,class_fx)
{	
	var num_luces = 5;
	
	for (i=0;i < num_luces;i++)
	{
		setTimeout(function(){add_fx_ie(obj_cont,class_fx);},i*50);
	}		
}
function add_fx_ie(obj_cont,class_fx)
{
	var duration =500;	
	var tiempo = 500;
	var escala = 3;	
	var rand_grados = Math.floor((Math.random()*120)+1);	
	var luz_id = 'luz'+Math.floor((Math.random()*1000)+1);	
	var luznum = Math.floor((Math.random()*3)+1);
	
	
	
	obj_cont.append('<div class="'+class_fx+luznum+'" id="' + luz_id+'"></div>');
	
	var luz_obj = obj_cont.find('#'+luz_id);
	
	var center_l = (obj_cont.width()/2  ) - ( luz_obj.width()/2  );
	var center_t = (obj_cont.height()/2 ) - ( luz_obj.height()/2 );
	
	luz_obj.stop(true,true).transition({left:center_l,top:center_t,rotate:'+='+rand_grados,scale:.1,opacity:0,duration:0});
	
	
	luz_obj.stop(true,true).animate({opacity:1},{duration:0,easing:'linear',complete:function(){
			$(this).stop(true,true).animate({opacity:0},{duration:duration/2,easing:'linear',complete:function(){
					$(this).remove();					
				},
				step:function(now, fx){					
					$(this).transition({rotate:'+='+(now*rand_grados),scale:now*escala,duration:0});
				}			
			}); 
		},
		step:function(now, fx){					
			$(this).transition({rotate:'+='+(now*rand_grados),scale:now,duration:0});
		}
	
	});	
}

function game_onTime(obj)
{
	if(obj.find('form').length > 0)
	{		
		$('#ilikeit').transition({scale:$('#ilikeit').css('scale')+.3,duration:200},function(){
			if($('#ilikeit').css('scale') <=1)
			{
				$('#ilikeit').transition({scale:$('#ilikeit').css('scale')-.25,duration:200});
			}
			else
			{
				$('#ilikeit').transition({scale:1,duration:200});
			}
		});
		game_notas_ok++;
		obj.find('form').remove();
		
		var audio = Math.floor((Math.random()*3)+1);
		
		if(!$.isIPad()){
			switch(audio)
			{
			case 1:
					game_audio1.seek (0);
					game_audio1.play();
			  break;
			case 2:
					game_audio2.seek (0);
					game_audio2.play();
			  break;
			default:
					game_audio3.seek (0);
					game_audio3.play();
			}
		}
		
	}
		if(game_notas_ok > 7)
		{
			if ($.browser.msie == true)  // si es IE
			{
				create_fx_ie($('#ilikeit'),'fire');
			}
			else
			{
				create_fx($('#ilikeit'),'fire');
			}
			if(!$.isIPad()){
				game_audio5.seek (0);
				game_audio5.play();
			}
			ga('send', 'event', 'interaccion', 'game', 'winner');			
		}
		
		video.volume(video.volume()+.40);
		if(video.volume() > 1){video.volume(1);}if(video.volume() < .1){video.volume(.1);}
		
		game_notas_bad=1;
		if(!$.isIPad()){
			game_audio7.stop();		
		}
			
}

function game_outOfTime(obj)
{		
	video.volume(video.volume()-.40);
	if(video.volume() > 1){video.volume(1);}if(video.volume() < .1){video.volume(.1);}	
	if(!$.isIPad()){
		game_audio4.play();
	}
	
	game_notas_bad++;
	if(game_notas_bad > 3)
	{
		if(!$.isIPad()){
			if (!game_audio7.playing()) {
				game_audio7.seek (0);
				game_audio7.play();
			}
		}
		ga('send', 'event', 'interaccion', 'game', 'bad');
	}		
}