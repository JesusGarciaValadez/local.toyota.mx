<? include('conexion/conexion.php'); ?>
<?php
function conectaBaseDatos(){
	try{
		$conexion = new PDO("mysql:host=localhost;dbname=highlander",
							"root",
							"lu*trev*mont",
							array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $conexion;
	}
	catch (PDOException $e){
		die ("No se puede conectar a la base de datos". $e->getMessage());
	}
}

function dameEstado(){
	$resultado = false;
	$consulta = "SELECT * FROM dealers GROUP BY estado";
	
	$conexion = conectaBaseDatos();
	$sentencia = $conexion->prepare($consulta);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}

function dameSucursal($estado = ''){
	$resultado = false;
	$con=mysqli_connect("localhost","root","lu*trev*mont","highlander");
// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM dealers WHERE estado = '$estado'");

	while($row = mysqli_fetch_array($result)) {
		$id      = $row['id'];
		$nombre  = $row['nombre'];
		$options .= "<option value='$id'>$nombre</option>";
	}
	mysqli_close($con);
	print_r($options);die();
}
