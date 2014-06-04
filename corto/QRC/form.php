<?php
include("../lib/conexion.php");
$email = "";
if( isset($_GET['id']) )
{
	
	$consulta= "SELECT usuarios_corto.cusuario_email FROM usuarios_corto WHERE cusuario_codigo='".$_GET['id']."'";
	$resultado = mysql_query($consulta,$Conexion);
		while ($fila = mysql_fetch_assoc($resultado)) {
		$email = $fila['cusuario_email'];		
	}	
}

if( isset($_GET['Email'],$_GET['TxtCP'],$_GET['TxtColor'],$_GET['id'] ))
{
	if($_GET['id'] != "")
	{
		guardar_datos($_GET['id'],$_GET['Email'],$_GET['TxtCP'],$_GET['TxtColor']);
	}
	else
	{
		guardar_datos('',$_GET['Email'],$_GET['TxtCP'],$_GET['TxtColor']);
	}
}

function guardar_datos($clave,$mail,$cp,$color)
{
	include("../lib/conexion.php");	
	if($clave != "")
	{	
		$strSQL = "UPDATE `usuarios_corto` SET `cusuario_email`='$mail', `cusuario_color`='$color',`cp`='$cp' WHERE (`cusuario_codigo`='$clave')";
		$rs = mysql_query($strSQL, $Conexion) or die(mysql_error());	
	}
	else
	{
		$code = date('YmdHis');
		$strSQL = "insert into usuarios_corto (cusuario_codigo,cusuario_email,cusuario_color,cp )values ('$code','$mail','$color','$cp')";
		$rs = mysql_query($strSQL, $Conexion) or die(mysql_error());		
	}
	header( 'Location:gracias.html' ) ;
} 
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Corolla Videollamada</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
 <!--scripts banners slider-->
<script type="text/javascript">
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		slideshow:false,
	});
});

function ValidaFormulario(){
	
	$('#TxtColor').val($('.flex-active').attr('id'));
	
	while(true){
		var Valida = 'NO';
		
		// VALIDA QUE EL CAMPO NOMBRE ESTE LLENO 
		if($('#Email').val() != '') {					
				if($('#Email').val().indexOf("@") >=0 && $('#Email').val().indexOf(".") >=0) {	Valida = 'OK';	}
				else{	Valida = 'NO'; $('#Email').focus();	alert('Ingresa un correo válido');	break;	}
			}
		else{	Valida = 'NO'; $('#Email').focus();	alert('Ingresa tu correo ...');	break;	}
						
		// VALIDA QUE EL CAMPO EMAIL ESTE LLENO 
		if($('#TxtCP').val() != '' && $('#TxtCP').val() != 'Código Postal') {	Valida = 'OK';	}
		else{	Valida = 'NO'; $('#TxtCP').focus();	alert('Ingresa tu CP');	break;	}														
		
		// VALIDA QUE EL CAMPO EMAIL ESTE LLENO 
		if($('#TxtColor').val() != '') {	Valida = 'OK';	}
		else{ alert('Selecciona un color de auto, solo dando clic en el circulo del color que te guste..');	break;	}		
		
		if (Valida == 'OK'){ 			
			
				$('#form_dat').submit();
			}	
		else {break;};
			
		break;	
		}			
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

<body style="background:#d5d5d5;" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
	<div class="form">
    	<div class="head">
        	<div class="nameplate"><img src="images/nameplate02.jpg" width="246" height="32" alt=""/></div>
            <h1>Rockear contigo <strong>fue espectacular.</strong></h1>
            <p>DÉjanos tus datos para que muy pronto<br> tengas noticias de nosotros.</p>
        </div>
        <form id="form_dat">
        	 <h1><strong>SELECCIONA COLOR</strong></h1>
            <div class="flexslider">
              <ul class="slides">
					<li>
                    	<img src="images/negro.jpg" />
                    </li>
                    <li>
                    	<img src="images/rojo.jpg" />
                    </li>
                    <li>
                    	<img src="images/gris.jpg" />
                    </li>
                    <li>
                    	<img src="images/blanco.jpg" />
                    </li>
                    <li>
                    	<img src="images/bronce.jpg" />
                    </li>
                    <li>
                    	<img src="images/azul.jpg" />
                    </li>
                    <li>
                    	<img src="images/plata.jpg" />
                    </li> 
              </ul>
              
            </div>
            <?php
				 if( $email != "")
				 {
			 ?>           
            <input type="text" id="Email" name="Email" value="<?php echo $email; ?>" placeholder="E-mail"/>
            
            <?php
				 }else{
			?>
            <input type="text" id="Email" name="Email" value="" placeholder="E-mail"/>
            <?php
				 }
            ?>
            
            <input type="text" id="TxtCP" name="TxtCP" value="" placeholder="Código Postal"/>
            <input type="hidden" id="TxtColor" name="TxtColor"/>
            <input onClick="ValidaFormulario();" value="Enviar" type="button"/>  
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>          
        </form>
        
    </div>
  
    
</body>
</html>
<script>
	function SaveColor(color){
			$('#TxtColor').val(color);				
		}
		
</script>
