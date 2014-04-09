<?php
require_once("funciones.php");
?>
<script src="jquery-1.10.2.min.js"></script>
<?php include('header.php'); ?>
<? include('conexion/conexion.php'); ?>
<? 
mysql_select_db($database, $conexion);
$query_estado="SELECT DISTINCT estado FROM  dealers ORDER BY estado ASC";
$estado=mysql_query($query_estado, $conexion) or die (mysql_error());
$row_estado=mysql_fetch_assoc($estado);
$totalRows_estado=mysql_num_rows($estado);
//echo $row_estado['estado'];

mysql_select_db($database, $conexion);
$query_sucursal="SELECT DISTINCT ciudad FROM  dealers  ORDER BY ciudad ASC";
$sucursal=mysql_query($query_sucursal, $conexion) or die (mysql_error());
$row_sucursal=mysql_fetch_assoc($sucursal);
$totalRows_sucursal=mysql_num_rows($sucursal);
//echo $row_sucursal['ciudad'];
  ?>
	<section class="secPrueba container">
		<article>
			<div class="textPrueba sixteen columns">
				<h2>Prueba de manejo</h2>
				<p>Vive la mejor experiencia de manejo con la nueva generación Highlander 14.</p>
			</div>
			<div class="contPrueba sixteen columns">
				<p>Por favor ingresa tus datos  y selecciona tu sucursal más cercana.</p>
				<form action="" method="get">
                	<input type="text" placeholder="*NOMBRE" required="true">
                    <input type="text" placeholder="*CORREO ELECTRÓNICO" required="true">
                    <input type="text" placeholder="*NÚMERO TELEFÓNICO (OPCIONAL)">
                    <label>SELECCIONA SUCURSAL</label>
                    <div class="selectBox">
                        <div class="box" id="box">Estado</div>



<select name="estado" id="estado" onchange="this.parentNode.getElementsByTagName('div')[0].innerHTML=this.options[this.selectedIndex].text">
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
                        <select name="sucursal" id="sucursal" onchange="this.parentNode.getElementsByTagName('div')[0].innerHTML=this.options[this.selectedIndex].text">
                <option value="">- primero seleccion un estado -</option>
    </select>
                    </div>
                    <input type="submit" value="enviar">
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


<?php include('footer.php'); ?>