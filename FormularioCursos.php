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
    	include ("RegistroCursos.php");
    ?>

	<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro de Cursos</span></h2>
		</div>		
		<form class="form__reg" method="post">
			<input  class="input" name="codigocurso" type="text" placeholder="&#128100;  codigo" required autofocus>
			<input class="input" name="codigocarrera"  type="text" placeholder="&#128441;  codigocarrera" required>
			<input class="input" name="nombrecurso"  type="text" placeholder="&#128441;  Nombre del curso" required>

		
            
            <div class="btn__form">
            	<input name="registro" class="btn__submit" type="submit" value="Registrar Curso">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
		</div>

		 <a href="MenuGestionCursos.php">
			<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
		<div>
			<label>Regresar a menu Gestion de cursos</label>
		</div>
	   	</a>
	</center>
</body>
</html>