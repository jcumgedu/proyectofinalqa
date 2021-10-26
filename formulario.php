<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Estilos/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./Estilos/main.css">
	<link rel="stylesheet" href="./Estilos/estilos2.css">
	<title>Formulario</title>
</head>
<body>
	<center>
	<?php
    	include ("registro.php");
    ?>

	<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro de Alumno</span></h2>
		</div>		
		<form class="form__reg" method="post">
			<input  class="input" name="carnet" type="text" placeholder="&#128100;  Carnet" required autofocus>
			<input class="input" name="nombre"  type="text" placeholder="&#128441;  Nombre" required>
			<input class="input" name="apellido"  type="text" placeholder="&#128441;  Apellido" required>
         
            <input class="input" name="direccion" type="text" placeholder="&#8962;  Dirección" required>
            <input class="input" name="telefono" type="text" placeholder="&#128222;  Telefono" required>
            <input class="input" name="correo" type="email" placeholder="&#9993;  Email" required>
            <div class="btn__form">
            	<input name="registro" class="btn__submit" type="submit" value="Registrar Alumno">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
		</div>

		 <a href="MenuGestionAlumnos.php">
			<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
		<div>
			<label>Regresar a menu Gestion Alumnos</label>
		</div>
	   	</a>
	</center>
</body>
</html>