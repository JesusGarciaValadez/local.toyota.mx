<? include('conexion/conexion.php'); ?>
<?php require_once("funciones.php"); ?>
<script src="jquery-1.10.2.min.js"></script>
<?php include('header.php'); ?>
	<section class="secPrueba container">
		<article>
			<div class="textPrueba sixteen columns">
				<h2>Prueba de manejo</h2>
				<p>Vive la mejor experiencia de manejo con la nueva generación Highlander 14.</p>
			</div>
			<div class="contPrueba sixteen columns">
				<p>Por favor ingresa tus datos  y selecciona tu sucursal más cercana.</p>
                <form action="" method="get" enctype="multipart/form-data">
                	<input type="text" name="nombre" id="nombre" placeholder="*NOMBRE" required="true">
                    <input type="text" name="correo" id="correo" placeholder="*CORREO ELECTRÓNICO" required="true">
                    <input type="text" name="telefono" id="telefono" placeholder="*NÚMERO TELEFÓNICO (OPCIONAL)">
                    <label>SELECCIONA SUCURSAL</label>
                    <div class="selectBox">
                        <div class="box" id="box">Estado</div>
                            <select name="estado" id="estado" onchange="this.parentNode.getElementsByTagName('div')[0].innerHTML=this.options[this.selectedIndex].text" required="true">
                                            <option value="" selected="selected" class="primero">- Seleccione un Estado -</option>
                                    <?php
                                    $estados = dameEstado();
                                    

                                    
                                    foreach($estados as $indice => $registro){
                                        echo "<option value=".$registro['id'].">".$registro['estado']."</option>";

                                    }
                                    ?>
                             </select>
                        </div>
                    <div class="selectBox">
                    <div class="box" id="box">Sucursal</div>
                                <select name="sucursal" id="sucursal" onchange="this.parentNode.getElementsByTagName('div')[0].innerHTML=this.options[this.selectedIndex].text" required="true">
                                            <option value="">- primero seleccion un estado -</option>
                                </select>
                    </div>
                    <input type="submit" value="Enviar" name="enviar" id="enviar">
                </form>
			</div>
		</article>
	</section>

<script>
$("#estado").on("change", buscarSucursales);
function buscarSucursales(){
    //$("#localidad").html("<option value=''>- primero seleccione un municipio -</option>");
    
    $estado = $("#estado").val();
    
    if($estado == ""){
            $("#sucursal").html("<option value=''>- primero seleccione un estado -</option>");
    }
    else {
        $.ajax({
            dataType: "json",
            data: {"estado": $estado},
            url:   'buscar.php',
            type:  'post',
            beforeSend: function(){
                //Lo que se hace antes de enviar el formulario
                },
            success: function(respuesta){
                //lo que se si el destino devuelve algo
                $("#sucursal").html(respuesta.html);
            },
            error:  function(xhr,err){ 
                alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
            }
        });
    }
}
</script>
<? 
 extract($_POST);
    extract($_GET);
if($nombre!="" && $correo!="" && $estado!="" && $sucursal!="")
{
    mysql_select_db($database, $conexion); 

$query_datos="SELECT * FROM dealers WHERE id='$estado'";
$datos=mysql_query($query_datos, $conexion) or die (mysql_error());
$row_datos=mysql_fetch_assoc($datos);
$totalRows_datos=mysql_num_rows($datos);
//$correo_db=row_datos['email']; 

mysql_select_db($database, $conexion);
    $sql = "insert into correos (nombre, correo, telefono, estado, sucursal) values ('$nombre','$correo','$telefono','$estado','$sucursal')";
    //echo $sql;    
    mysql_query($sql, $conexion) or die(mysql_error());

    $asunto="solicitud";
    $formato="Content-type: text/html\n";
    
          
    $formato.= "From: adriana@lunave.com <adriana@lunave.com>\r\n"; 
    $para=$row_datos['email'];
    $para2='adriana@lunave.com';

    
    $sucursal1=$row_datos['nombre'];
    $estado1=$row_datos['estado'];

    $mensaje="Contacto
        Nombre:   $nombre
        Correo:   $correo
        Teléfono: $telefono
        Estado:   $estado1
        Sucursal: $sucursal1
       ";
    mail($para,$para2,$asunto,$mensaje,$formato);
}else{
   
}
   
?>

<?php include('footer.php'); ?>