<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Corolla Videollamada</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.media.js"></script>


<script type="text/javascript" >
var video_llamada ;

$(document).ready(function() {
    video_llamada = $.media('#video_llamada');
	
video_llamada.ended(function () {
	window.location.href='form.php?id=<?php echo $_GET['id'];  ?>'
	llamada_terminada=true;
});
});	

var llamada_terminada=false;
var llamada_iniciada=false;
var espera=0;

function verificar_llamda(){
	if(llamada_terminada==false)
	{	
		if (!video_llamada.playing()) {
			espera++;
			if(espera > 50)
			{
				llamada_terminada=true;
				window.location.href='form.php?id=<?php echo $_GET['id'];  ?>'
			}
		}
	}
}
function contestar_llamada(){	
	llamada_terminada=false;
	llamada_iniciada =true;
	espera=0;
	video_llamada.play();
	setInterval('verificar_llamda();',200);	
	$('#video_div').show();
}

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44104206-1', 'corollaexperience.com');
  ga('send', 'pageview');

</script>
</head>

<body style="background:#1e1e1e;" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
	<div class="inicio">
    	<div class="nameplate"><img src="images/nameplate.jpg" width="277" height="104" alt=""/></div>
      <h1>¡TIENES UNA <br>LLAMADA <strong>de Bryan!</strong></h1>
       <div class="icon"><img src="images/icono.png" width="84" height="96" alt=""/></div>
       <a onClick="contestar_llamada();"><img src="images/contestar.jpg" width="260" height="48" alt=""/></a>
       <div id="video_div">
            <video id="video_llamada" width="282" height="490"   >
                <source src="video/Video_QR_Iphone.mp4" type="video/mp4">
                <source src="video/Video_QR_Iphone.ogv" type="video/ogg">           
            </video> 
       </div>       
        
    </div>
   
   
    
</body>
</html>
