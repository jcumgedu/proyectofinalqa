<?php
	//Declaramos los parametros de conexion
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$database = "alumnos";
	$port = 3306;

	// Creamos la conexion
	$conexion = mysqli_connect($servername, $username, $password, $database, $port);
?>