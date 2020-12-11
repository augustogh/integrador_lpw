<?php
/*
		 No se puede usar mysql_connect porque ha sido declarado obsoleto y sacado de PHP 7.
		 La extensión mysql_* en el código; está obsoleta a partir de PHP 5.5.0, por lo que ha sido eliminada a partir de PHP 7.0.0
		 En su lugar, se debería utilizar la extensión mysqli o PDO_MySQL.

		 Mi contenedor esta usando:
		 	HP 7.3.24 (cli) (built: Nov 18 2020 10:06:33) ( NTS )
			Copyright (c) 1997-2018 The PHP Group
			Zend Engine v3.3.24, Copyright (c) 1998-2018 Zend Technologies

		Referencia: https://www.php.net/manual/es/mysqli.quickstart.connections.php
*/
	function conecta(){	
		$servername = "192.168.160.2";
		$username = "root";
		$password = "dbpass";
		$dbname = "medicina";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else {
			//echo 'salio bien';
			return $conn;
		}
	}
	
?>