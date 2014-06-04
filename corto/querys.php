<?php 
$URL = 'http://www.corollaexperience.com/corto/'; 
$rnd = '&r='.rand(0,100);
?>

<style>
/*Pop styles*/
.popSalir { width: 700px; background:#FFF; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; padding:0 0 40px;}
.popSalir div.nameplate{width:300px;height:43px;margin:0 auto;position: relative;top: 15px;background: url(images/nameplate2.png) no-repeat;}
.popSalir div.tag{width: 258px;position: relative;top:46px;left:56px;}
.popSalir div.tag h1{font-size:34px;text-transform: uppercase;font-weight:300;color: #333;margin:0;font-style:italic;	}
.popSalir div.tag h2{font-size:21px;text-transform: uppercase;font-weight:300;color: #333;margin:0;float:left;font-style:italic;	}
.popSalir div.corolla {width:353px;height:172px;float:right;position:relative;top:0;background: url(images/corolla.png) no-repeat;right:47px;}
.popSalir div.buttons {height:56px;position:relative;width:500px;margin:0 auto;clear:both;}
.popSalir div.buttons a {display:block;float:left;width:206px;height:56px;}
.popSalir div.buttons a.regresar {background:url(images/regresarBtn.png) no-repeat;margin:0 20px 0; cursor:pointer;}
.popSalir div.buttons a.salir {background:url(images/salirBtn.png) no-repeat;}
.popSalir div.ligas {clear:both;position: relative;width:675px;height:68px;margin:0 auto;}
.popSalir div.ligas a{float:left;height:68px;display:block;}
.popSalir div.ligas a.exterior{width:209px;background: url(images/exterior.png);}
.popSalir div.ligas a.interior{width:209px;background:blue;background: url(images/interior.png);}
.popSalir div.ligas a.desempeno{width:255px;background:blue;background: url(images/tecnologia.png);}
.popSalir div.share {width:476px;height:40px;margin:0 auto;top: 20px;position: relative;}
.popSalir div.share a{float:left;display:block;height:40px;width:146px;}
.popSalir div.share a.facebook{background:url(images/faceShare.png)}
.popSalir div.share a.twitter{background:url(images/twittShare.png)}
.popSalir div.share a.salir{background:url(images/salirShare.png)}
/* BOTON CERRAR */
#BtnCloseOpcion{ background-position: -432px -180px; cursor:pointer; position:absolute; height:36px; margin-left:665px; width:36px;}

/*Loading styles*/
.loading {width:832px;height:468px;margin:0 auto;background:#000;color:#fff;}
.loading div.nameplate{width: 442px;height:171px;margin:0 auto 10px;top:76px;background:url(images/nameplate.png) no-repeat;position:relative;	}
.loading p{width:320px;height:27px;text-transform: uppercase;font-size:12px;margin:0 auto;text-align: center;font-style: italic;position: relative;}
.loading div.loader { position:absolute !important; top:410px !important;  width:300px; left:50%;margin-left:-150px; background:#fff;padding:3px;-webkit-border-radius: 7px;border-radius: 7px;position: relative;top:70px;}
.loading div.bar {width:10%;height:8px;background:#d1052b;-webkit-border-radius: 7px;border-radius: 7px;}
.cont_image{position:absolute;width:57px;height:48px;left:50%;top:270px;margin-left:-28px;overflow:hidden;}
.cont_text{position:absolute;width:442px;height:48px;left:50%;top:340px;margin-left:-221px;overflow:hidden;}
</style>
            
<?php
$opcion = $_GET['opcion'];
switch ($opcion)
	{	
	
	//LOADING
	case 'loading': ?>    
    	<div class="loading">
            <div class="nameplate"></div>
           <div class="cont_image" id="loadin_img_txt"><img src="images/ecualIcon.png" width="57" height="48" /></div>
           <div class="cont_text" id="loadin_txt_tip"><p>No tardamos, el staff está haciendo todo lo posible para que comience el show.</p></div>
           
           <div class="loader">
            <div class="bar" id="loading_bar"></div>
           </div>
        </div>       
    <?php break;
						
	// AVISO DE PRIVACIDAD
	case 'aviso_privacidad': ?>			
		<p><strong>Aviso de Protección de datos</strong><br>
  <strong>[<em>Toyota  México</em>]</strong></p>
<p>En Toyota Motor Sales de  México, S. de R. L. de C.V. (&quot;Toyota México&quot;) la información de  nuestros clientes y clientes potenciales es tratada de forma estrictamente  confidencial y es tan importante como su seguridad al conducir nuestros  vehículos, por lo que hacemos un esfuerzo permanente para salvaguardarla.</p>
<p><strong>DATOS  PERSONALES Y FORMA DE RECABARSE</strong><br>
  Toyota México recabará de  usted los datos personales que sean necesarios para la adecuada prestación de  nuestros servicios (i) directamente o a través de otras subsidiarias o  entidades afiliadas de Toyota México, (ii) a través de los agentes o promotores  de Toyota México, (iii) a través de los terceros que hayan comprado un  automóvil en su nombre o que hayan presentado su automóvil para servicio o para  cualquier otro fin en nuestras agencias o sucursales, o (iv) a través de  cualesquiera terceros que presten servicios a Toyota México relacionados con su  automóvil.&nbsp;<br>
  Dichos datos personales  podrán incluir los siguientes: nombre; datos de contacto tales como dirección, teléfono,  teléfono de oficina, número de fax, teléfono celular y correo electrónico entre  otros; y sus datos patrimoniales, tales como ingresos mensuales o anuales,  ingresos de su hogar, y datos de su automóvil.<br>
  Asimismo, es posible que  requiramos información de terceros relacionados con usted, como el nombre y  datos de contacto de referencias o personas de contacto en caso de emergencia.</p>
<p><strong>FINALIDADES  Y TRANSFERENCIA DE LOS DATOS PERSONALES</strong><br>
  Más que una política, en  Toyota México tenemos la filosofía de mantener una relación estrecha y activa  con nuestros clientes.<br>
  Al proporcionar sus datos  personales, consiente su tratamiento tanto dentro como fuera de los Estados  Unidos Mexicanos y entiende que podrán ser tratados directa o indirectamente  por Toyota México, sus sociedades subsidiarias, afiliadas o relacionadas, sus  distribuidores autorizados y/o sus terceros proveedores de servicios, así como  en su caso autoridades competentes, con las siguientes finalidades <strong>(i)</strong> ofrecerle productos o servicios de  Toyota México o de alguna de nuestras subsidiarias, <strong>(ii)</strong> dar cumplimiento a requerimientos legales, <strong>(iii)</strong> realizar actividades de mercadeo  y promoción en general relacionados con los productos de Toyota México y sus  subsidiaras, <strong>(iv)</strong> realizar análisis  estadísticos y de mercado, <strong>(v)</strong> mantener actualizados nuestros registros para poder responder a sus consultas,  invitarle a eventos, hacer válida la garantía de su vehículo, informarle acerca  de llamados a revisión de su vehículo y conocer el historial de los servicios  que se han realizado al mismo y de los problemas que, en su caso, haya  presentado, hacer de su conocimiento nuestras promociones y lanzamientos,  mantener comunicación en general, así como, dar seguimiento a nuestra relación  comercial, verificación de capacidad de crédito, investigación del mercado y  gestión de campañas de comercialización, gestión de cobranza y otras campañas,  y (vi) utilizar sus datos con el propósito de transferirlos a terceras partes,  incluyendo la oficina matriz de Toyota México, sus subsidiarias y afiliadas,  así como a sus socios comerciales (los &quot;Socios Comerciales&quot;) con el  propósito de que estos puedan contactarlo para ofrecerle servicios y productos  que estén o no relacionados con los servicios y productos de Toyota México.<br>
  Para prevenir el acceso no  autorizado a sus datos personales y con el fin de asegurar que la información  sea utilizada para los fines establecidos en este Aviso de Privacidad, hemos  establecido procedimientos físicos, electrónicos y administrativos, utilizando  tecnologías avanzadas que limitan el uso o divulgación de sus datos,  permitiéndonos tratarlos debidamente. Asimismo, puede tener la confianza que  sus datos personales serán tratados exclusivamente por aquellas personas que  realicen actividades que requieran del conocimiento de dichos datos.</p>
<p><strong>SOLICITUD  DE INFORMACIÓN PÚBLICA A TRAVÉS DE FACEBOOK </strong><br>
  Al vivir la experiencia del  cortometraje interactivo Toyota México no recopilará ninguna información  personal a menos que nos la proporcione voluntariamente. Los datos personales  que podríamos solicitar son nombre, domicilio, número telefónico, dirección de  correo electrónico, código postal y rango de edad. Usted podrá ingresar a  nuestra página web aunque decida no proporcionarnos dicha información, sin  embargo en este caso le aclaramos que no podrá tener dicha experiencia a través  de nuestro video interactivo.<br>
  Para utilizar las  funcionalidades de la aplicación deberá permitirnos el acceso a su información  pública en Facebook (nombre, Facebook ID, imagen de perfil) además de la  información pública disponible y la que necesite la aplicación al seleccionar  &quot;Permitir&quot;. Para obtener más información sobre las prácticas de  privacidad de Facebook, incluyendo la conexión con una aplicación, consulte la  política de privacidad de Facebook en www.facebook.com. Toyota Motor Sales de  México no posee ni opera la plataforma de Facebook. Si hace clic en  &quot;Permitir&quot;, la aplicación tendrá acceso a la información antes  mencionada para recoger y almacenar parte o la totalidad de esa información.<br>
  Nuestro objetivo principal  de obtener su información personal cuando participe en el cortometraje  interactivo, es proporcionarle la funcionalidad y los servicios que necesita  para una experiencia significativa y personalizada, mientras utiliza las características  del sitio.<br>
  <strong>SOLICITUD  DE ACCESO, RECTIFICACIÓN, CANCELACIÓN U OPOSICIÓN DE DATOS PERSONALES Y  REVOCACIÓN DEL CONSENTIMIENTO (SOLICITUD ARCO)</strong><br>
  Todos sus datos personales  son tratados de acuerdo a la legislación aplicable y vigente en el país, por  ello le informamos que usted tiene en todo momento el derecho de acceder,  rectificar, cancelar u oponerse al tratamiento que le damos a sus datos  personales (los <strong><u>Derechos ARCO</u></strong>), así como revocar el  consentimiento otorgado para el tratamiento de los mismos; derecho que podrá  hacer valer a través del Centro de Atención al Cliente de Toyota México, en su  teléfono 01800-7869682 o por medio de su correo electrónico  contacto@marcatoyota.com.mx. La que también será el Responsable para todos los  efectos establecidos en la  Ley para la  Protección de Datos Personales en Posesión de Particulares.<br>
  A través de estos canales  usted podrá actualizar sus datos y especificar el medio por el cual desea  recibir información, ya que en caso de no contar con esta especificación de su parte,  Toyota México establecerá el canal que considere pertinente para enviarle  información.<br>
  Le pedimos que considere que <strong>(i)</strong> por su protección y beneficio,  es posible que le solicitemos documentación que acredite las correcciones a los  datos que desee acceder, rectificar y/o cancelar o aquellos a los que desee  oponerse, <strong>(ii)</strong> es posible que Toyota  México no pueda cancelar o bloquear la totalidad de sus datos personales de  conformidad con las leyes que le sean aplicables, y<strong> (iii)</strong> el ejercicio de sus Derechos ARCO es gratuito, en el  entendido que Toyota México podrá solicitarle el pago únicamente de los gastos  justificados de envío o costos de reproducción de la información que solicite.<br>
  Asimismo, usted tiene  derecho a iniciar un procedimiento de protección de derechos ante el Instituto  Federal de Acceso a la Información y Protección de Datos (IFAI), siempre y  cuando reúna los requisitos señalados en la legislación aplicable y vigente, en  los casos siguientes: <strong>(y)</strong> cuando  Toyota México no responda a su solicitud para ejercer sus Derechos ARCO dentro  de los 20 días siguientes de haberla recibido, o<strong> (z)</strong> dentro de los 15 días siguientes de haber recibido una  respuesta por parte de Toyota México pero ésta no cumpla con lo establecido en  la legislación aplicable y vigente en materia de protección de datos  personales.<br>
  Este aviso de privacidad  podrá ser modificado de tiempo en tiempo por Toyota México. Dichas  modificaciones serán oportunamente informadas a través de nuestra página en  Internet toyota.com.mx, o cualquier otro medio de comunicación oral, impreso o  electrónico que Toyota México determine para tal efecto.<br>
  Toyota México, es una  sociedad de nacionalidad mexicana con domicilio en Paseo de Tamarindos No.  400-B Piso 3, Col. Bosques de las Lomas, C.P. 05120 Delegación Cuajimalpa de  Morelos, México, D.F. Para cualquier duda o aclaración así como para el  ejercicio de sus Derechos ARCO, favor de comunicarse al Centro de Atención al  Cliente de Toyota México, en su teléfono 01800-7869682 con los horarios de  atención 08:00 am a 08:00 pm de lunes a sábado, excepto días festivos, o por  medio de su correo electrónico contacto@marcatoyota.com.mx.<br>
  De conformidad con lo  previsto en los artículos 8, 9, 13 y 36 de la Ley para la Protección de Datos  Personales en Posesión de Particulares por medio de la presente <strong>(a)</strong> reconozco que he leído y entiendo  los alcances del Aviso de Privacidad de Toyota México, <strong>(b)</strong> autorizo de forma expresa a Toyota México a recabar y tratar  mis datos personales para los fines establecidos en y de conformidad con lo  previsto en el presente Aviso de Privacidad, según el mismo pueda ser  modificado de tiempo en tiempo, y las disposiciones legales aplicables, y <strong>(c)</strong> autorizo a Toyota México de forma  expresa a transmitir mis datos personales de conformidad con y a las personas  previstas en el presente Aviso de Privacidad, según el mismo pueda ser  modificado de tiempo en tiempo, y las disposiciones legales aplicables.</p>
	<?php
    break;
	
	// PANTALLA SALIR
	case 'pantalla_salir': ?>                
        <div class="popSalir">
            <div class="ImgSprite" id="BtnCloseOpcion" onClick="HideOpcion()" title="Cerrar Aviso de Privacidad"></div>
            <div class="nameplate"></div>
          <div class="tag">
                <h1>¿A dÓnde vas?</h1>
              <h2>si estamos rockeando tranquilos.</h2>
            </div>
            <div class="corolla"></div>
            <div class="buttons">
                <a class="regresar" onClick="HideOpcion()"></a> <a class="salir" href="http://www.corollaexperience.com/" target="_self" ></a>
            </div>
        </div> 
	<?php break;
	
	// PANTALLA SHARE MILLONARIO
	case 'pantalla_share_millonario': ?>        	
        <div class="popSalir">        
			<div class="ImgSprite" id="BtnCloseOpcion" onClick="HideOpcion()" title="Cerrar Aviso de Privacidad"></div>        
			<div class="nameplate"></div>
          <div class="tag" style="top:7	0px;">
				<h1>VOLVIÓ A <strong>NACER</strong></h1>
				<h2>Y MUCHO MÁS ATRACTIVO</h2>
          </div>
            <div class="corolla"></div>
            <div class="ligas">
                <a class="exterior" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>
                <a class="interior" href="http://www.corollaexperience.com/#/modelos" target="_blank"></a>
                <a class="desempeno" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>	
            </div>
            <div class="share">
                <a class="facebook" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $URL ?>querys.php?opcion=share_millonario<?php echo $rnd ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>

				<a class="twitter" href="javascript: void(0);" onClick="window.open('http://www.twitter.com/intent/tweet?url=<?php echo $URL.$rnd ?>&button_hashtag=IlikeIt&text=TOYOTA COROLLA 14 I LIKE IT MILLONARIO','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>

                <a class="salir" href="http://www.corollaexperience.com/" target="_blank" onClick="HideOpcion()"></a>	
                </div>
        </div>           
	<?php break;
	
	// SHARE MILLONARIO
	case 'share_millonario': ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" />
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta HTTP-EQUIV="Pragma" CONTENT="no-cache" charset="utf-8" />	
            <title>TOYOTA COROLLA'14 I LIKE IT "MILLONARIO"</title>
            <meta name="keywords" content="Antes de irme a jugar golf con mi amigo Slim, les dejo la oportunidad de ser millonarios por un momento con Corolla'14 #ILikeIt"/>
            <meta name="description" content="Antes de irme a jugar golf con mi amigo Slim, les dejo la oportunidad de ser millonarios por un momento con Corolla'14 #ILikeIt"/>
            <meta name="author" content="Toyota" />     
            <link rel="image_src" href="images/ricothumb01.jpg"/>
            <meta itemprop="thumbnailUrl " name="thumbnail" content="images/ricothumb01.jpg"/>
            <meta property="og:image" content="images/ricothumb01.jpg" />   
        </head>
        <body>
            <img src="images/ricothumb02.jpg"/>
            <img src="images/ricothumb03.jpg"/>
            <script>location.href = '<?php echo $URL ?>';</script>
        </body>
        </html>
    <?php break;
	
	// PANTALLA SHARE FAMA
	case 'pantalla_share_fama': ?>        	
        <div class="popSalir">
        	<div class="ImgSprite" id="BtnCloseOpcion" onClick="HideOpcion()" title="Cerrar Aviso de Privacidad"></div>
            <div class="nameplate"></div>
          <div class="tag" style="top:7	0px;">
				<h1>VOLVIÓ A <strong>NACER</strong></h1>
				<h2>Y MUCHO MÁS ATRACTIVO</h2>
          </div>
            <div class="corolla"></div>
            <div class="ligas">
                <a class="exterior" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>
                <a class="interior" href="http://www.corollaexperience.com/#/modelos" target="_blank"></a>
                <a class="desempeno" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>	
            </div>
            <div class="share">
                <a class="facebook" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $URL ?>querys.php?opcion=share_famoso<?php echo $rnd ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>	
                <a class="twitter" href="javascript: void(0);" onClick="window.open('http://www.twitter.com/intent/tweet?url=<?php echo $URL.$rnd ?>&button_hashtag=IlikeIt&text=TOYOTA COROLLA 14 I LIKE IT FAMA','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
                
                <a class="salir" href="http://www.corollaexperience.com/" target="_blank" onClick="HideOpcion()"></a>	
                </div>
        </div>                 
	<?php break;
	
	// SHARE FAMOSO
	case 'share_famoso': ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" />
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta HTTP-EQUIV="Pragma" CONTENT="no-cache" charset="utf-8" />	
            <title>TOYOTA COROLLA'14 I LIKE IT "FAMA"</title>
            <meta name="keywords" content="La fama de cualquier Rock Star es mundial. Pero la mía y la del Corolla'14, es infinita #ILikeIt" />
            <meta name="description" content="La fama de cualquier Rock Star es mundial. Pero la mía y la del Corolla'14, es infinita #ILikeIt" />
            <meta name="author" content="Toyota" />     
            <link rel="image_src" href="images/famathumb01.jpg"/>
            <meta itemprop="thumbnailUrl " name="thumbnail" content="images/famathumb01.jpg"/>
            <meta property="og:image" content="images/famathumb01.jpg" />   
        </head>
        <body>
            <img src="images/famathumb02.jpg"/>
            <img src="images/famathumb03.jpg"/>
            <script>location.href = '<?php echo $URL ?>';</script>
        </body>
        </html>
    <?php break;
	
	// PANTALLA SHARE IRRESISTIBLE
	case 'pantalla_share_irresistible': ?>        	
        <div class="popSalir">
        	<div class="ImgSprite" id="BtnCloseOpcion" onClick="HideOpcion()" title="Cerrar Aviso de Privacidad"></div>
            <div class="nameplate"></div>
          <div class="tag" style="top:7	0px;">
				<h1>VOLVIÓ A <strong>NACER</strong></h1>
				<h2>Y MUCHO MÁS ATRACTIVO</h2>
          </div>
            <div class="corolla"></div>
            <div class="ligas">
                <a class="exterior" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>
                <a class="interior" href="http://www.corollaexperience.com/#/modelos" target="_blank"></a>
                <a class="desempeno" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>	
            </div>
            <div class="share">
                <a class="facebook" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $URL ?>querys.php?opcion=sharex_irresistible<?php echo $rnd ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>	
                <a class="twitter" href="javascript: void(0);" onClick="window.open('http://www.twitter.com/intent/tweet?url=<?php echo $URL.$rnd ?>&button_hashtag=IlikeIt&text=TOYOTA COROLLA 14 I LIKE IT IRRESISTIBLE','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
                <a class="salir" href="http://www.corollaexperience.com/" target="_blank" onClick="HideOpcion()"></a>	
                </div>
        </div>           
	<?php break;
	
	// SHARE IRRESISTIBLE
	case 'sharex_irresistible': ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" />
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta HTTP-EQUIV="Pragma" CONTENT="no-cache" charset="utf-8" />	
            <title>TOYOTA COROLLA'14 I LIKE IT "IRRESISTIBLE"</title>
            <meta name="keywords" content="Sí, ya sé que les dan ganas de enmarcar mi foto de perfil. Y es que sólo el Corolla'14 es tan irresistible como yo #ILikeIt" />
            <meta name="description" content="Sí, ya sé que les dan ganas de enmarcar mi foto de perfil. Y es que sólo el Corolla'14 es tan irresistible como yo #ILikeIt" />
            <meta name="author" content="Toyota" />     
            <link rel="image_src" href="images/irresistiblethumb01.jpg"/>
            <meta itemprop="thumbnailUrl " name="thumbnail" content="images/irresistiblethumb01.jpg"/>
            <meta property="og:image" content="images/irresistiblethumb01.jpg" />   
        </head>
        <body>
            <img src="images/irresistiblethumb02.jpg"/>
            <img src="images/irresistiblethumb03.jpg"/>
            <script>location.href = '<?php echo $URL ?>';</script>
        </body>
        </html>
    <?php break;
	
	// PANTALLA SHARE COMPARTIR GENERAL
	case 'pantalla_share_general': ?>        	
        <div class="popSalir">        
			<div class="ImgSprite" id="BtnCloseOpcion" onClick="HideOpcion()" title="Cerrar Aviso de Privacidad"></div>        
			<div class="nameplate"></div>
          <div class="tag" style="top:7	0px;">
				<h1>VOLVIÓ A <strong>NACER</strong></h1>
				<h2>Y MUCHO MÁS ATRACTIVO</h2>
          </div>
            <div class="corolla"></div>
            <div class="ligas">
                <a class="exterior" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>
                <a class="interior" href="http://www.corollaexperience.com/#/modelos" target="_blank"></a>
                <a class="desempeno" href="http://www.corollaexperience.com/#/explora" target="_blank"></a>	
            </div>
            <div class="share">
                <a class="facebook" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $URL.$rnd ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>

                <a class="twitter" href="javascript: void(0);" onClick="window.open('http://www.twitter.com/intent/tweet?url=<?php echo $URL.$rnd ?>&button_hashtag=IlikeIt&text=TOYOTA COROLLA 14 I LIKE IT','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
                
                <a class="salir" href="http://www.corollaexperience.com/" target="_self" onClick="HideOpcion()"></a>	
                </div>
        </div>           
	<?php break;
	
	}
?>