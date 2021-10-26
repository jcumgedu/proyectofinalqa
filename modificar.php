<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar Alumno</title>
	 <link rel="stylesheet" type="text/css" href="Estilos/styles.css" />
	 <link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
</head>
<body class="body6">
	<center>
		<img src="./Imagenes/mod.png" width="270px" height="200px">
		<h1 class="h1_c">Actualizar Alumno</h1>
		<form action="ConsultarAlumnosMod.php" method="post">
			<table cellspacing="10px" style="margin-top: 20px" border="1">
	            <tr>
	            	<td>
	            		<label class="label_style">CARNET</label>
	                </td>
	                <td>
	                    <input type="text" name="carnet" width="30">
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                	<input class="boton3" type="submit" name="consultar" value="Consultar">
	                </td>
	            </tr>
        	</table>
		</form>

		<a href="MenuGestionAlumnos.php">
			<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
		<div>
			<label>Regresar a menu gestion de alumnos</label>
		</div>
	   	</a>

	</center>
</body>
</html>