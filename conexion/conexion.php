<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
		$hostname = "localhost";
		$database = "highlander";
		$username = "highlander";
		$password = "high*lander";
		$conexion = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
?>
