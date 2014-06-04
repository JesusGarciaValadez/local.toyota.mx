<?php $file = date('YmdHis');//extraemos la fecha del servidor ?>
           
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/webcam.js"></script> 

<style>
	/* RESETEO UNIVERSAL */
html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,time, mark, audio, video { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; list-style: none;}
/* HTML5 display-role reset for older browsers */
article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display: block;}

/* GENERALES */
body{ font-family: 'Open Sans', sans-serif,  sans-serif; }

</style>

<script language="JavaScript">
	var aleatorio = Math.random(); // RANDOM	
	
	// CERRAMOS EL FORMULARIO DE LA CAMARA
	function Call_Close_Camera(){
		parent.Close_Camera(); // LLAMAMOS A UNA FUNCION EXTERNA PARA EL CIERRE DEL POP-UP
		}
		
	// VISUALIZAMOS EL AVISO DE PRIVACIDAD	
	function Call_ShowAvisoPrivacidad(){
		parent.ShowAvisoPrivacidad('camara')
		}
	
	function Monta_TipoFoto(tipo){
			$('#TxtTipoFoto').val(tipo);
		}
	
	function MarcaImgFotoLocal(){
			$('#FotoLocalOK').css('visibility','visible');
			$('#CamaraOK').css('visibility','hidden');
		}
	
	function RecargarIframeFormularioLocal(){
			$('#iFrmFormularioLocal').attr('src','querys.php?opcion=formulario_foto_local&file=<?php echo $file ?>');
			//$('#iFrmFormularioLocal').contentWindow.location.reload();
		}
					
	webcam.set_api_url('querys.php?opcion=foto_camara&file=<?php echo $file ?>'); // PHP adonde va a recibir la imagen y la va a guardar en el servidor
	webcam.set_quality( 100 ); // calidad de la imagen
	webcam.set_shutter_sound( true ); // Sonido de flash
	webcam.set_hook( 'onComplete', 'my_completion_handler' );	
	
	// GUARDAMOS LA IMAGEN CAPTURADA Y LOS DATOS
	function do_upload() {
		while(true){
			var Valida = 'NO';
			
			// VALIDA QUE EL CAMPO NOMBRE ESTE LLENO 
			if($('#TxtNombre').val() != '') {	Valida = 'OK';	}
			else{	Valida = 'NO'; $('#TxtNombre').focus();	alert('Ingresa tu nombre ...');	break;	}
							
			// VALIDA QUE EL CAMPO EMAIL ESTE LLENO 
			if($('#TxtEmail').val() != '') {		
				if($('#TxtEmail').val().indexOf("@") >=0 && $('#TxtEmail').val().indexOf(".") >=0) {	Valida = 'OK';	}
				else{	Valida = 'NO'; $('#TxtEmail').focus();	alert('Ingresa un correo válido');	break;	}			
			}
			else{	Valida = 'NO'; $('#TxtEmail').focus();	alert('Ingresa tu correo');	break;	}														

			
			
			
			// VALIDA QUE EL CAMPO NOMBRE ESTE LLENO 
			if($('#ChkAceptarAP').is(":checked")) {	Valida = 'OK';	}
			else{	Valida = 'NO';	 $('#ChkAceptarAP').focus();	alert('No has aceptado los terminos y condiciones');	break;	}	
			
			if (Valida == 'OK'){ 
				
				if($('#TxtTipoFoto').val() != ''){
							
						if($('#TxtTipoFoto').val() == 'local'){
							$.get("querys.php?opcion=guardar_informacion_foto_local&id_foto=" + $('#TxtFile').val() 
												+ "&nombre=" + $('#TxtNombre').val() 
												+ "&email=" + $('#TxtEmail').val() 
												+ "&random=" + aleatorio);
								parent.Close_Camera(); // LLAMAMOS A UNA FUNCION EXTERNA PARA EL CIERRE DEL POP-UP
								parent.RecibeFotoNombreLocales($('#TxtNombre').val(),$('#TxtFile').val());
							}
							
						if($('#TxtTipoFoto').val() == 'camara'){ webcam.upload(); }
							}
							
					else{ alert('Toma una fotografia con tu camara local o sube una de tu libreria...'); }
				}	
			else {break;};
				
			break;	
			}			
		}

</script>
 
<style>
	.ImgSprite{background-image: url("../images/sprite.png"); background-repeat: no-repeat; }
		
	.CamaraBloque{ display:inline-block; margin-bottom:10px; padding-left:15px; padding-right:15px; vertical-align:top; width:650px; }
		#IcinoCamara{ background-position: -432px -216px; display:inline-block; height:36px; vertical-align:top; width:36px; }
		.CamaraBloque h1{ color:#C70019; display:inline-block; font-size:20px; font-weight:bold; padding-top:10px; text-align:left; vertical-align:top; width:560px; }
		#BtnClose{ background-position: -432px -180px; cursor:pointer; display:inline-block; height:36px; vertical-align:top; width:36px; }	
		
		.CamaraBloque h2{ color:#666; font-size:13px; line-height:15px; }
		
		#BloqueCamara{ display:inline-block; margin-right:30px; vertical-align:top; width:290px; }
			#BloqueCamara label{ color:#333; font-size:14px; }
			#Camara{ border:4px solid #999; width:280px; }
			
		#BloqueFormulario{ display:inline-block; margin-top:20px; vertical-align:top; width:300px; }
			#BloqueFormulario label{ color:#333; font-size:16px; font-weight:bold; }
			.TxtFormulario{ background:#CCC;  border:1px solid #999; color:#666; font-size:20px; height:35px; margin-top:10px; margin-bottom:20px; padding-left:10px;
							 text-align:left; width:300px; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px;}					
			.TxtLeido{ font-size:12px; }
				.TxtLeido span{ color:#C70019; cursor:pointer; text-decoration:underline;}
			
		#BloqueBotones{ margin-bottom:0;}
			#CapturaFoto{ background-position: 0 -252px; cursor:pointer; display:inline-block; height:72px; vertical-align:top; width:144px; }	
			#NuevaFoto{ background-position: -288px -180px; cursor:pointer; display:inline-block; height:72px; vertical-align:top; width:144px; }	
			#MiLibreria{ background-position: -144px -180px; cursor:pointer; display:inline-block; height:72px; vertical-align:top; width:144px; }	
			#ILikeIt{ background-position: 0 -180px; cursor:pointer; display:inline-block; height:72px; vertical-align:top; width:144px; }	
		
		#iFrmFormularioLocal{height:40px; vertical-align:top; width:130px; position: absolute; margin-left:350px; margin-top:350px; left: 0; top: 0; }	
		
		#CamaraOK{background-position: -144px -252px; height:36px; margin-left:150px; margin-top:330px; position: absolute; width:36px; left: 0; top: 0; visibility:hidden; }
		#FotoLocalOK{background-position: -144px -252px; height:36px; margin-left:450px; margin-top:330px; position: absolute; width:36px; left: 0; top: 0; visibility:hidden; }
</style>
<!-- BLOQUE SUPERIOR -->
<div class="CamaraBloque">
	<div class="ImgSprite" id="IcinoCamara"></div>
	<h1>UTILIZA TU WEBCAM E INGRESA TUS DATOS</h1>
    <div class="ImgSprite" id="BtnClose" onClick="Call_Close_Camera()"></div>
</div>

<!-- BLOQUE TITULO SUPERIOR -->
<div class="CamaraBloque">
	<h2><i>POR SI TE PONES TUS MOÑOS Y NO QUIERES HACERLO A TRAVÉS DE FACEBOOK, SUBE LA FOTO QUE HASTA TU ABUELITA TE HA CHULEADO O TÓMATE UNA CON TU WEBCAM.</i></h2>
</div>



<!-- BLOQUE CAMARA | CAMPOS -->
<div class="CamaraBloque">
	
    <div id="BloqueCamara">
    	<label style="font-size:12;" >Foto: (Para activar tu webcam da click en <img src="../img/allow.png" width="12" height="12" alt=""/>)</label>
	  <div id="Camara"><script language="JavaScript"> document.write( webcam.get_html(280, 210) );</script></div>
    </div>
    
    <div id="BloqueFormulario">
        <label>NOMBRE:</label><br>
        <input class="TxtFormulario" id="TxtNombre" name="TxtNombre" type="text"/><br>
                
        <label>CORREO ELECTRÓNICO:</label><br>
        <input class="TxtFormulario" id="TxtEmail" name="TxtEmail" type="email"/> 

		<div class="TxtLeido">
        	<input type="checkbox" name="ChkAceptarAP" id="ChkAceptarAP">
            <i>HE LEIDO Y ACEPTO EL <span onClick="Call_ShowAvisoPrivacidad(); webcam.freeze_stop();" title="Leer Aviso de Privacidad">AVISO DE PRIVACIDAD</span></i>
       		</div>
        	<div id="upload_results" class="formulario"></div>
	</div>
            
</div>

<!-- IFRAME - CAMARA -->
<iframe id="iFrmFormularioLocal" src="querys.php?opcion=formulario_foto_local&file=<?php echo $file ?>" frameborder="0" allowtransparency="true" height="40" width="130" scrolling="no"></iframe>

<!-- IMAGENES OK -->
<div class="ImgSprite" id="CamaraOK"></div>
<div class="ImgSprite" id="FotoLocalOK"></div>

<!-- BLOQUE BOTONES -->
<div class="CamaraBloque" id="BloqueBotones" align="center">
	<form>
	<div class="ImgSprite" id="CapturaFoto" onClick="webcam.freeze()" title="Tomar Fotografia"></div>
    <div class="ImgSprite" id="NuevaFoto" onClick="webcam.reset()" title="Tomar una Nueva Foto"></div>
    
    <div class="ImgSprite" id="MiLibreria" title="Subir foto desde la PC"></div>

    <div class="ImgSprite" id="ILikeIt" onClick="do_upload()" title="I like this picture"></div>  
    <!--input type=button value="Configurar" onClick="webcam.configure()"-->
    </form>  
</div>
<input type="hidden" id="TxtTipoFoto" name="TxtTipoFoto"/>
<input type="hidden" id="TxtFile" name="TxtFile" value="<?php echo $file ?>"/>