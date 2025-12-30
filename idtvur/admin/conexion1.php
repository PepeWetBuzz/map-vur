<?php
	
	echo "<script>console.log('Dentro archivo conexion');</script>";

	//$host        = "host = localhost";
	$host        = "host = DB_host";
	$port        = "port = DB_port";
	$dbname      = "dbname = DB_name";
	$credentials = "user = DB_Password password = DB_password";
 
	$conexion = pg_connect( "$host $port $dbname $credentials"  );
	if(!$conexion) {
	 echo 'Conexion Fallida : ', pg_connect_error();
	 exit();
	} else {
	   echo "<script>console.log('Abriendo conexion');</script>";
	}
 
?>