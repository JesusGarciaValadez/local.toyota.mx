<!doctype html>
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="es"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache" charset="utf-8" />	
	<title>TOYOTA COROLLA'14 I LIKE IT</title>
    <meta name="viewport" content="width=1024, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Yo ya fui parte de la historia, vive esta experiencia junto Bryan Amadeus en este divertido corto interactivo #ILikeIt " />
    <meta name="description" content="Yo ya fui parte de la historia, vive esta experiencia junto Bryan Amadeus en este divertido corto interactivo #ILikeIt " />
    <meta name="author" content="Toyota" />     
    <link rel="image_src" href="images/shareGenthumb.jpg"/>
    <meta itemprop="thumbnailUrl " name="thumbnail" content="images/shareGenthumb.jpg"/>
    <meta property="og:image" content="images/shareGenthumb.jpg" />       
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>   
	<link rel="shortcut icon" type="imges/x-icon" href="favicon.ico"/>
    <link rel="author" type="text/plain" href="humans.txt"/>    
    <!--[if lt IE 9]>	
        <script src="js/html5.js"></script>	
    <![endif]-->    	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>   
    <link rel="stylesheet" href="css/main.css"/>
    
    <link type="text/css" href="css/elementos.css" rel="stylesheet">
    <link type="text/css" href="css/game.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script><!-- VERSION JQUERY -->
    <script src="js/jquery.spritely-0.6.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>         
    <script src="js/jquery.media.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.media.timeline.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.transit.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.preload.min.js"></script>

    
    <script src="js/elementos_low.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/traks.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/game.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/fx.js"></script>    
                                                 
</head>
<body> 

<div id="fb-root"></div>
<script>
var autenticado_de_inicio =false;

window.fbAsyncInit = function() {
	FB.init({
	appId      : '483873238360269', // App ID
	channelUrl : 'http://digitalferrer.com/', // Channel File
	status     : true, // check login status
	cookie     : true, // enable cookies to allow the server to access the session
	xfbml      : true  // parse XFBML
	});	
		
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // the user is logged in and has authenticated your
    // app, and response.authResponse supplies
    // the user's ID, a valid access token, a signed
    // request, and the time the access token 
    // and signed request each expire
    //var uid = response.authResponse.userID;
    //var accessToken = response.authResponse.accessToken;
	
	//alert("the user is logged in and has authenticated your app");
	autenticado_de_inicio=true;
	
  } else if (response.status === 'not_authorized') {
    // the user is logged in to Facebook, 
    // but has not authenticated your app
	//alert("but has not authenticated your app");
	autenticado_de_inicio=false;
  } else {
    // the user isn't logged in to Facebook.
	//alert("the user isn't logged in to Facebook.");
	autenticado_de_inicio=false;
  }
 });		
		 
	FB.Event.subscribe('auth.authResponseChange', function(response) {
	// CONECTADO
	if (response.status === 'connected') {			
			
			var aleatorio = Math.random(); // RANDOM				
			$.get("datos_facebook.php?random=" + aleatorio, function(data){
				if($('#TxtTipoConexionVideo').val() != 'local'){
					$("#ResultadosOcultosAjax").html(data);	
				}
			});
		
			
		$('#BtnFaceConectado').css('visibility','visible');	
		$('#BtnFaceLogout').css('visibility','visible');	
		 
		// CARGAR NOMBRE PARA LOGOUT		 
		FB.api('/me', function(response) { 
			$('#DivNameLogout').html('¿No eres ' + response.name + '?');	
			if(autenticado_de_inicio==false){show_video_with_facebook();} 
		});				
	} 
	// NO AUTORIZADO
	else if (response.status === 'not_authorized') { FB.login(); } 
		
	// NO ESTA LOGEADO
	else { FB.login();	}
	
	});
};

// Load the SDK asynchronously
(function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));
  
function show_video_with_facebook(){
			var aleatorio = Math.random(); // RANDOM				
			$.get("datos_facebook.php?random=" + aleatorio, function(data){	$("#ResultadosOcultosAjax").html(data);	});
	
	Showloading();
	setTimeout('IniciarPorFacebook();',tiempo_load);	
  }

function logout(){
	FB.getLoginStatus(handleFBSessionResponse);
}
// handle a session response from any of the auth related calls
function handleFBSessionResponse(response) {
	location.reload();
	FB.logout(handleFBSessionResponse);
}
</script>
                       
<!-- INICIO: CUERPO -->
<div id="DivCuerpo">
	
	<!-- INICIO: CONTENEDOR PRINCIPAL -->
    <div id="DivcontentPrincipal">
		
        <!-- DIV VIDEO TRACK -->	
        <div id="DivVideoTrack">
        	
            
            
            
            
<div style=" visibility:hidden; font-family:'Conv_Jellyka_Estrya_Handwriting',Sans-Serif;">Jellyka</div>    
<div style=" visibility:hidden; font-family:'Conv_BLUNT',Sans-Serif;">Conv_BLUNT</div>            
            
		  <!-- /////////////////////////////////////////////////////////////////-->
<video id="video_to_trak" width="832" height="468"  >
    <source src="video/video_low.mp4" type="video/mp4">  
    <source src="video/video_low.ogv" type="video/ogg">        
</video>

<div id="btn_play_ipad"><img src="img/ipadStart.png" onClick="$(this).hide();play_video();interaccion_iniciada= true;setTimeout('iniciar_escaneo_video();',10000);	" /></div>


<div id="ipad_imgs" class="frame_vid">        
    <div id="fotoface1"></div> 
    <div id="fotoface2"></div> 
    <div id="fotoface3"></div>    
    <div id="fotoface4_contenedor"><div id="fotoface4"></div></div>
    <div id="ipad_mask"></div> 
</div>  


<div id="select_ropa" class="frame_vid">        
    <div id="btn_ropa1"></div> 
    <div id="btn_ropa2"></div> 
</div>        
        
<div id="menu_select" class="frame_vid">        
    <div id="btn_millonario"></div> 
    <div id="btn_fama"></div> 
    <div id="btn_irresistible"></div> 
    <div id="btn_salir"></div> 
    <div id="btn_compartir"></div> 
</div> 



<div id="foto_millonario_contenedor1" class="frame_vid">
	<div id="foto_millonario1" ></div>
    <div id="marco1" class="frame_vid"></div> 
</div> 
<div id="foto_millonario_contenedor2" class="frame_vid">
	<div id="foto_millonario2"></div>
    <div id="marco2" class="frame_vid"></div> 
</div> 

<div id="amigocel_contenedor" class="frame_vid">
	<div id="foto_amigocel" ></div>
    <div id="cel_millonario" class="frame_vid"></div>
    <div id="nombre_amigocel" ></div>
    <div id="texto_amigocel">Amigo ¿Me prestas una lana? un milloncito nada más. Te quiero.</div> 
</div>



<div id="cont_letrero_fama"  class="frame_vid">
    <div id="letrero_fama"></div>
    <div id="letrero2_fama"></div>
    <div id="img_letrero_fama"></div>
</div>

<div id="cont_foto_fama"  class="frame_vid">
	<div id="foto_fama"></div>
    <div id="mask_foto_fama"></div>
</div>


<div id="cont_foto_playera"  class="frame_vid">
	<div id="foto_playera"></div>
    <div id="mask_foto_playera"></div>
</div>

<div id="cont_firma_fan"  class="frame_vid">
	<div id="firma_fan"></div>
    <div id="firma2_fan"></div>
</div>


<div id="select_escape" class="frame_vid">        
    <div id="btn_escape1"></div> 
    <div id="btn_escape2"></div> 
</div> 

 <div id="cont_foto_cartel"  class="frame_vid">
	<div id="crop_foto_cartel"><div id="foto_cartel"></div></div>
    <div id="mask_foto_cartel"></div>
    <div id="text_foto_cartel"></div>
</div>
    
    
    <div id="game_cont" class="frame_vid">
        <div id="marcador_color"></div>
        <div id="marcador"></div>
        <div id="marcador_trastes"></div> 
        <div id="ilikeit"></div>
        <div id="game"></div> 
        <div  id="cont_audio_game" style="position:absolute; top:0; left:0; width:100%; height:0; overflow:hidden; ">
            <audio id="audio1"><source src="audio/nota1.mp3" type="audio/mpeg"></audio>  
            <audio id="audio2"><source src="audio/nota2.mp3" type="audio/mpeg"></audio>  
            <audio id="audio3"><source src="audio/nota3.mp3" type="audio/mpeg"></audio>
            <audio id="audio4"><source src="audio/outime.mp3" type="audio/mpeg"></audio>  
            <audio id="audio5"><source src="audio/superado.mp3" type="audio/mpeg"></audio>         
            <audio id="audio7"><source src="audio/abucheo.mp3" type="audio/mpeg"></audio>  
        </div>     
             
    </div>
    
    <!--  textos de interaciones-->
    <div id="txt_bat" style="visibility:hidden; height:0px;">
      <div class="txtLft">
            <div class="img_txt_cont" style="top:5px;">
                <img src="img/batte.png" width="42" height="55" alt=""/>
            </div>
            <div class="tip_txt_cont" style="top:5px;">
                <h1>¡Elige bien!</h1>
                <h2>o serÁs la vÍctima<strong> nÚmero 15.</strong></h2>
                <p>Elige la dirección que deseas tomar <strong>izquierda o derecha</strong></p>
            </div>
        </div>    
     </div> 
    <div id="txt_ropa" style="visibility:hidden;height:0px;">
        <div class="textCenter">
        	<div class="txt_cont1">
            	<h1>¡VÍstete galÁn!</h1>
             </div>
             <div class="txt_cont2">
            	<h2>Entre la chamarra y el pantalÓn, está el detalle del <strong>rock’n roll.</strong></h2>
            	<p>Elige el botÓn de la<strong> izquierda o la derecha</strong></p>
             </div>
        </div>
	</div>
    
	 <div id="txt_elegir" style="visibility:hidden; height:0px;" >     
      	<div class="txtLft">
        	<div class="txt_cont1">
                <h1>Un rockstar siempre sabe quÉ elegir.</h1>
               <h2>Da clic y <strong>haz tu sueÑo realidad.</strong></h2>
           </div>
        </div>
     </div>    
     
    <div id="txt_rock_dedos" style="visibility:hidden; height:0px;">     
        <div class="txtLft">
            <div class="img_txt_cont" style="top:10px;">
                <img style="margin:0 10px 0  0;" src="img/rock.png" alt=""/>
            </div>
            <div class="tip_txt_cont" style="top:10px;"> 
                <h1>¡Prepara esos dedos! </h1>
               <h2>que vamos <strong>a rockear.</strong></h2>
            </div>           
        </div>     
     </div>
     
    <div id="txt_rock_emociona" style="visibility:hidden; height:0px;">     
        <div class="txtLft">
            <div class="img_txt_cont" style="top:10px;">
                <img style="margin:0 10px 0  0;" src="img/rock.png" alt=""/>
            </div>
            <div class="tip_txt_cont" style="top:10px;"> 
                <h1>¡Emociona a tus fans!</h1>
               <h2>o de lo contrario, <strong>ellos enloquecerÁn.</strong></h2>
            </div>           
        </div>     
     </div>           
     
    <div id="txt_notas" style="visibility:hidden;height:0px;">
        <div class="txtLft">
            <div class="img_txt_cont" style="top:10px;">
                <img style="margin:0 10px 0  0;" src="img/nota.png" alt=""/>
            </div>
            <div class="tip_txt_cont" style="top:10px;"> 
                <h1>Da clic sobre las notas</h1>
               <h2>Cuando <strong>toquen los círculos</strong> de la guitarra.</h2>
            </div>           
        </div>
	</div>     
         
    <div id="txt_conteo">3</div>              
             
                    
                
    
    <!-- elemetos generales para los textos del corto-->
    <div class="info_text">
        <div  class="text_izq">
        </div>
        <div  class="central_img"></div>
        <div  class="text_der"></div>
    </div>    
    
    <!-- elemetos generales para las notas del juego -->
    <div id="original_nota" style="display:none; width:0px;">
   	  <div class="cubo" id="x"><form></form><div class="cubo2" id="y"></div></div>
    </div>   
    <div id="original_nota_ipad" style="display:none; width:0px;">
   	  <div class="cubo_i" id="x"><form></form></div>
    </div>

    <div id="cont_qrc" class="qrc">
       <div class="txt">
            Bryan Amadeus todavÍa tiene algo mÁs para ti. <br/>
            EscanÉa el siguiente CÓdigo con tu celular y <br/>
            descubre lo que resta de la experiencia. o da <a style="cursor:pointer;" onClick="show_llamada();">Clic AquÍ</a> 
       </div>
       <div class="code"><img src="images/qrc.jpg" width="293" height="293" /> </div>
       <div class="share">
       <a  class="facebook" href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=http://www.corollaexperience.com/corto/','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
       <a class="twitter" href="javascript: void(0);" onClick="window.open('http://www.twitter.com/share?url=http://www.corollaexperience.com/corto/','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
       
       </div>
    </div>
  

<div id="btn_play_pausa"></div>
<div id="btn_home"></div>
<div id="btn_salirCorto"></div>
<div id="net_err"><div id="loading_err"></div></div>

<!--//////////////////////////////////////////////////////////////////////////////////////-->
        </div>
        
        
        <!-- OBSCURECIMIENTO INTERNO -->        
        <div id="PopUpSmall"></div>
        
        <!-- VIDEO LOOP -->
        <div id="DivLoop">
            <video id="loop_intro" width="832" height="468"  autoplay loop>
                <source src="video/video_loop.mp4" type="video/mp4"> 
                <source src="video/video_loop.ogv" type="video/ogg">          
            </video>
        </div>
        


        <!-- BOTON PARA PASAR DIRECTO AL VIDEO CON FACEBOOK -->
        <div class="ImgSprite" id="BtnFaceConectado" onClick="show_video_with_facebook();"></div>
        
        <!-- BOTON PARA DESCONECTAR DE FACEBOOK -->
        <div id="BtnFaceLogout">
            <a href="javascript:logout();"><span id="DivNameLogout"></span><i>Salir</i>&nbsp;<span id="TextoFBLogout">FACEBOOK</span></a>
        </div>
                          
        <!-- PRINCIPAL BOTONES TIPO CONEXION -->
        <div id="DivPrincipalTipoConexion">
            <div class="ImgSprite" id="ImgCorollaInicial"></div>                
          <div id="TextoInicialTipoConexion">
              <h1>SÉ PARTE DE LA HISTORIA</h1>
                <h2>Vive La experiencia en este corto Interactivo</h2>
                <p>Para vivir esta experiencia al máximo te recomendamos que lo hagas a través <span>de Facebook</span><br/>y uses una foto de <strong>perfil donde aparezca tu cara</strong></p>
            </div>
            
            <div class="ImgSprite" id="BtnFacebook" >
                <div id="MascaraBtnFB" >
                    <fb:login-button size="xlarge" show-faces="false" width="235" perms='email,user_photos'>------------------------</fb:login-button>
                </div>
            </div>
            <div class="ImgSprite" id="BtnCamara" onClick="ShowPopUpSmall(); Show_Camera();"></div>      
            <div class="ImgSprite" id="BtnInteraccionDirecta"></div>
            
            <div id="aviso_priv" class="aviso_priv">
                <a href="#" onClick="ShowAvisoPrivacidad('directo')" title="Mostrar Aviso de Privacidad">Aviso de privacidad</a>
            </div>            
            
        </div>                        

        <!-- CONTENT PARA OBSCURECIMIENTO GENERAL -->        
        <div id="PopUpSmall_Light"></div>
        
        <!-- INICIO: CONTENT OBSCURECIMIENTO GENERAL -->
        <div id="PopUpSmall_Dark">
        
            <!-- IFRAME - CAMARA -->
            <iframe id="iFrmCamara" src="webcam/index.php" frameborder="0" allowtransparency="true" height="0" width="0" class="Redondeo"></iframe>
            
            <!--INICIO: AVISO DE PRIVACIDAD -->
            <div id="AvisoPrivacidad">                		
                <div class="ContAvisoPrivacidad">                                                                   
                    <div class="rgh">
                        <div class="txt">
                            <div id="ContClosePopUp" align="right">
                                <div class="ImgSprite" id="BtnClose" onClick="HideAvisoPrivacidad()" title="Cerrar Aviso de Privacidad"></div>
                            </div>                                    
                            <div class="scroll">                                    
                                <div id="TextAvisoPrivacidad"></div>                                                           
                            </div>
                        </div>        	
                    </div>            
                </div>        
            <!--CIERRE: AVISO DE PRIVACIDAD -->
            </div>
            
            <!-- INICIO: CONTENEDOR PARA OPCIONES -->
            <div id="Content_Opciones" class="Redondeo"></div>
            
            <!-- INICIO: CONTENEDOR PARA LOADING -->
            <div id="Content_Loading"></div>
            
        <!-- CIERRE: CONTENT OBSCURECIMIENTO GENERAL -->                
        </div>
                                        
	<!-- CIERRE: CONTENEDOR PRINCIPAL -->
    </div>
	
    <!-- INICIO: FOOTER -->
	<div id="DivFooter">
    	<p>Esto se pone mejor con audÍfonos o volumen alto.<br>
			Pon tu nombre y mail, en verdad no te vamos a Stalkear.<br> 
			El propÓsito de este video es puro entretenimiento. </p>
        <p class="legales">2013 TOYOTA MÉxico®</p>
    <!-- CIERRE: FOOTER -->
    </div>
    
<!-- CIERRE: CUERPO -->    
</div>

<!-- OBSCURECIMIENTO EXTERNO -->      
<div id="PopUpBig"></div> 



<input type="hidden" id="TxtTipoConexionVideo" name="TxtTipoConexionVideo" />
<input type="hidden" id="TxtEstatusAvisoPrivacidad"/>
<input type="hidden" id="TxtNombreLocal" name="TxtNombreLocal"/>
<input type="hidden" id="TxtFotoLocal" name="TxtFotoLocal"/>
<style>
	#ResultadosOcultosAjax{ width:500px; height:0px; background:#036; visibility:hidden; overflow:hidden; }
</style>
<div id="ResultadosOcultosAjax"></div>


<iframe id="iframe_llamada" src="QRC/index.php"></iframe>

</body>
</html>

<script type="text/javascript" src="js/general.js"></script><!-- SCRIPT GENERAL --> 
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script><!-- SCRIPT SCROLL EN DIV -->