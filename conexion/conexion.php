<?php
        $hostname = "localhost";
		$database = "hihglander";
		$username = "root";
		$password = "root";
		$conexion = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
?>
