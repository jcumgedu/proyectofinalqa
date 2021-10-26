<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Estilos/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./Estilos/main.css">
	<link rel="stylesheet" href="./Estilos/estilos2.css">
	<title>Formulario Carrera</title>
</head>
<body class="body4">
	<center>
	<?php
    	include ("RegistroAsig2.php");
    ?>

	<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro de Cursos</span></h2>
		</div>		
		<form class="form__reg" method="post">
			<input  class="input" name="id_asigdetalle" type="text" placeholder="&#128100;  codigo detalle" required autofocus>
			<input class="input" name="cod_asignacion"  type="text" placeholder="&#128441;  codigo asignacion" required>
			<input class="input" name="codigo_curso"  type="text" placeholder="&#128441;  No curso" required>

			<input class="input" name="descripcion"  type="text" placeholder="&#128441;   Descripcion" required>


		
            
            <div class="btn__form">
            	<input name="registro" class="btn__submit" type="submit" value="Registrar Curso">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
		</div>

		 <a href="MenuAsignaciones.php">
			<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
		<div>
			<label>Regresar a menu Gestion de asignaciones</label>
		</div>
	   	</a>
	</center>
</body>
</html>