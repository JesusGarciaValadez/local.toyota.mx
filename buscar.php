<?php
require_once("funciones.php");

if(isset($_POST['estado'])){
	
	$sucursales = dameSucursal($_POST['estado']);
	
	$html = "<option value=''>- Seleccione una sucursal -</option>";
	foreach($sucursales as $indice => $registro){
		$html .= "<option value='".$registro['id']."'>".$registro['ciudad']."</option>";
	}
	
	$respuesta = array("html"=>$html);
	echo json_encode($respuesta);
}
?>