<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
		$hostname = "localhost";
		$database = "corolla";
		$username = "root";
		$password = "hola*nina*21";
		$conexion = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
?>