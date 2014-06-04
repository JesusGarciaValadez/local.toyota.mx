<?php
$opcion = $_GET['opcion'];
switch ($opcion)
	{						
	// GUARDAMOS LA FOTO TOMADA POR LA CAMARA
	case 'foto_camara':
		mkdir("fotos/".$_GET['file']);//Creamos el directorio con un id unico
		$filename = "fotos/".$_GET['file']."/foto_usuario.jpg";//nombre del archivo
		$result = file_put_contents( $filename, file_get_contents('php://input') );//renombramos la fotografia y la subimos
		if (!$result) {
			print "No se pudo subir al servidor\n";
			exit();
		}		
		$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $filename;//generamos la respuesta como la ruta completa
		print "$url\n";//20120214060943.jpg	
	break;	
	
	// GUARDAMOS LA INFORMACION EN LA BD
	case 'guardar_informacion_camara':
		include("../lib/conexion.php");
		$id=$_POST['camara_id'];
		$nombre=$_POST['camara_nombre'];
		$email=$_POST['camara_email'];
		$strSQL = "insert into usuarios_corto (cusuario_codigo, cusario_nombre, cusuario_email )values ('$id','$nombre','$email')";	
		$rs = mysql_query($strSQL, $Conexion) or die(mysql_error());
		?>
        	<script>
        	parent.Close_Camera(); // LLAMAMOS A UNA FUNCION EXTERNA PARA EL CIERRE DEL POP-UP
			parent.RecibeFotoNombreLocales('<?php echo $nombre ?>','<?php echo $id ?>');
			</script>
        <?php	
	break;	
	
	// FORMULARIO PARA FOTO LOCAL
	case 'formulario_foto_local':
		?>
		<style>
            .file{ cursor:pointer; position: relative; text-align: right; -moz-opacity:0 ; 
                    filter:alpha(opacity: 0); opacity: 0; vertical-align:top; z-index: 2; height:40px; width:130px; }
        </style>
        <form id="FrmFormularioFotoPC" name="FrmFormularioFotoPC" method="post" action="querys.php?opcion=recibir_foto_local" enctype="multipart/form-data">
        	<input type="hidden"  id="TxtFileLocal" name="TxtFileLocal" value="<?php echo $_GET['file'] ?>"/>
            <input type="file" class="file" name="imagen" id="imagen" accept="image/*" onchange="document.getElementById('FrmFormularioFotoPC').submit()"/>    
        </form>
        <?php				
	break;
	
	// RECIBIR FOTO LOCAL
	case 'recibir_foto_local':
		include('../lib/image.class.php');
		mkdir("fotos/".$_POST['TxtFileLocal']);//Creamos el directorio con un id unico	
		$file = $_POST['TxtFileLocal'];
		move_uploaded_file($_FILES['imagen']['tmp_name'],'fotos/'.$file.'/foto_usuario.jpg');
		
		$img = new Zubrag_image;
		
		// initialize
		$img->max_x        = 640;
		$img->max_y        = 640;
		$img->cut_x        = 0;
		$img->cut_y        = 0;
		$img->quality      = 80;
		$img->save_to_file = true;
		$img->image_type   = -1;
		
		// generate thumbnail
		$img->GenerateThumbFile('fotos/'.$file.'/foto_usuario.jpg', 'fotos/'.$file.'/foto_usuario.jpg');
		?>
		<script>
        	parent.Monta_TipoFoto('local');
        	parent.MarcaImgFotoLocal();	  
			parent.RecargarIframeFormularioLocal();    		
        </script>
		<?php
	break;
	
	// GUARDAMOS LA INFORMACION EN LA BD, FOTO LOCAL
	case 'guardar_informacion_foto_local':
		include("../lib/conexion.php");
		$id=$_GET['id_foto'];
		$nombre=$_GET['nombre'];
		$email=$_GET['email'];
		$strSQL = "insert into usuarios_corto (cusuario_codigo, cusario_nombre, cusuario_email )values ('$id','$nombre','$email')";	
		$rs = mysql_query($strSQL, $Conexion) or die(mysql_error());	
	break;

}
?>